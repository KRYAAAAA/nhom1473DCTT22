<!-- Thêm -->
<?php
session_start();
$phongban = $_SESSION['mapb'];
$thoigian = date('Y-m-d');
$macb =  $_SESSION['userid'];
$tinhtrang = "chưa xác nhận";
$loai = "yêu cầu nhập thiết bị"; 
$mapb=$_SESSION['mapb'];
try{
    $sql ="INSERT INTO dsphieumuon(macb,thoigian,loai,tinhtrang) VALUES ('$macb','$thoigian','$loai','$tinhtrang')";
        $kq = mysqli_query($conn, $sql);    
        $sql = "SELECT * FROM `dsphieumuon` ORDER BY maphieu DESC LIMIT 1" ;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $maphieu= $row["maphieu"] ;
            }
        }
        $checksl=0;
        $inputNumbers = $_POST['soluong'];
        foreach ($inputNumbers as $number => $value) {
            $checksl= $checksl+intval($value);
        }

        if($checksl>0){
            $inputNumbers = $_POST['soluong'];
            foreach ($inputNumbers as $number => $value) {
                if ($value > 0) {
                    $matb = $_POST["matb"][$number];
                    $soluong =  $value;
                    $sql2 = "INSERT INTO phieunhaptb(maphieu,matb,soluong,mapb) VALUES ('$maphieu','$matb','$soluong','$mapb')";;
                    $k2 = mysqli_query($conn, $sql2);
                }
            } 
            echo "<script>alert('Tạo phiếu thành công!')</script>";
            if($_SESSION['userrole']=="admin"){
<<<<<<< HEAD
                echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban/phongban.php';</script>";
            }else echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban_user/phongban.php';</script>";
            }else{
        echo "<script>alert('Hãy nhập số lượng!')</script>";
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/nhapthietbi/nhapthietbi.php';</script>";
=======
                echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/thietbiphongban/phongban.php';</script>";
            }else echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/thietbiphongban_user/phongban.php';</script>";
            }else{
        echo "<script>alert('Hãy nhập số lượng!')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/nhapthietbi/nhapthietbi.php';</script>";
>>>>>>> 1729ad7 (đạt)
        
        }
        
    
    
    
}catch (Exception $e) {
    echo "<script>alert('Lỗi tạo phiếu nhập!')</script>";
}
    
?>

