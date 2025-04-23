<!-- Thêm -->
<?php
session_start();
echo $_SESSION['userid'];
$macb = $_SESSION['userid'];
$thoigian = date('Y-m-d');
if (isset($_POST["tuan"]) && isset($_POST["thu"]) && isset($_POST["tiet"]) ) {
    $tinhtrang = "chưa xác nhận";
    $loai = "mượn thiết bị"; 
    $sql ="INSERT INTO dsphieumuon(macb,thoigian,loai,tinhtrang) VALUES ('$macb','$thoigian','$loai','$tinhtrang')";
    try {
        $kq = mysqli_query($conn, $sql);    
        $sql = "SELECT * FROM `dsphieumuon` ORDER BY maphieu DESC LIMIT 1" ; //lay maphieu vua tao
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $maphieu= $row["maphieu"] ;
            }
        }
        $inputNumbers = $_POST['soluong'];
        foreach ($inputNumbers as $number=>$value) {
            if ($value > 0) {
                $matb = $_POST["matb"][$number];
                $soluong =  $value;
                echo $matb.$soluong;
                $sql2 = "INSERT INTO phieumuontb(maphieu,matb,soluong) VALUES ('$maphieu','$matb','$soluong')";;
                $k2 = mysqli_query($conn, $sql2);
            }
        }   
        if ( is_array($_POST["tuan"])){
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
        echo "<script>window.location.href = '../muontra_user/muontra_user.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi tạo phiếu!')</script>";
    }
}else{
    echo "<script>alert('Hãy nhập đầy đủ thông tin!')</script>";
}
?>

