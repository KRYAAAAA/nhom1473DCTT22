<?php
$mamn =$_POST["txtmamn"];
$tenmn =$_POST["txttenmn"];
$ghichu =$_POST["txtghichu"];
$sql = "UPDATE dsmonnganh SET tenmn = '$tenmn',ghichu = '$ghichu' WHERE mamn='$mamn'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20m%c3%b4n%20ng%c3%a0nh/dsmonnganh.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20m%c3%b4n%20ng%c3%a0nh/dsmonnganh.php';</script>";
}
?>