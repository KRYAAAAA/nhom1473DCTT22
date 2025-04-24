<!-- Thêm -->
<?php
session_start();
$macb = $_SESSION['userid'];
$thoigian = date('Y-m-d');
if (isset($_POST["phong"]) && isset($_POST["tuan"]) && isset($_POST["thu"]) && isset($_POST["tiet"]) ) {
    $phong=$_POST["phong"]; 
    $tinhtrang = "chưa xác nhận";
    $loai = "mượn kho/phòng"; 
    
    try {
        // kiem tra phong dc muon hay chua
        $checkkq="";
        if ( is_array($_POST["tuan"])){
            foreach ($_POST["tuan"] as $tuan) {
                if (is_array($_POST["thu"])) {
                    foreach ($_POST["thu"] as $thu) {
                        if ( is_array($_POST["tiet"])) {
                            foreach ($_POST["tiet"] as $tiet) {
                                $sqltest="SELECT * FROM phieumuonkp JOIN ngaymuon ON phieumuonkp.maphieu = ngaymuon.maphieu WHERE makp='$phong' AND tuan='$tuan' AND thu='$thu' AND tiet='$tiet'";
                                $kqtest = mysqli_query($conn, $sqltest);
                                if ($kqtest->num_rows > 0) {
                                    $checkkq = $checkkq."Tuần ".$tuan."-Thứ ".$thu."-Tiết ".$tiet." | " ;
                                }
                            }
                        }
                    }
                }
            }
        }
        
        if($checkkq==""){

            $sql ="INSERT INTO dsphieumuon(macb,thoigian,loai,tinhtrang) VALUES ('$macb','$thoigian','$loai','$tinhtrang')";
            $kq = mysqli_query($conn, $sql);    
            $sql = "SELECT * FROM `dsphieumuon` ORDER BY maphieu DESC LIMIT 1" ; //lay maphieu vua tao
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $maphieu= $row["maphieu"] ;
                }
            }
            $sql2 = "INSERT INTO phieumuonkp(maphieu,macb,makp) VALUES ('$maphieu','$macb','$phong')";;
            $k2 = mysqli_query($conn, $sql2);

            if ( is_array($_POST["tuan"]) ){
                foreach ($_POST["tuan"] as $tuan) {
                    if (is_array($_POST["thu"])) {
                        foreach ($_POST["thu"] as $thu) {
                            if ( is_array($_POST["tiet"])) {
                                foreach ($_POST["tiet"] as $tiet) {
                                    $sql = "INSERT INTO ngaymuon(maphieu,tuan,thu,tiet) VALUES ('$maphieu', '$tuan','$thu','$tiet')";
                                    try {
                                        $kq = mysqli_query($conn, $sql);
                                    } catch (Exception $e) {
                                    }
                                }
                            }else alert('Hãy nhập đầy đủ thông tin!');
                        }
                    }else alert('Hãy nhập đầy đủ thông tin!');
                }
            }else alert('Hãy nhập đầy đủ thông tin!');
            echo "<script>alert('Tạo phiếu thành công!')</script>";
            echo "<script>window.location.href = '../../Hieu/muontra_user/muontra_user.php';</script>";
        }else{
            echo "<script>alert('Phòng ".$phong."Đã được mượn vào :".$checkkq."')</script>";
            echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/taopmkp/taopm_kp.php';</script>";
            
        }  
    } catch (Exception $e) {
        echo "<script>alert('Lỗi tạo phiếu!')</script>";
    }
}else{
    echo "<script>alert('Hãy nhập đầy đủ thông tin!')</script>";
}
?>
