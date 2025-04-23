<?php
$ten =$_POST["txtten"];
$sql = "DELETE FROM dstoanha WHERE ten = '$ten'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php.php';</script>";
}
?>