<?php
$ten =$_POST["txtten"];
$sotang =$_POST["txtsotang"];
$ghichu =$_POST["txtghichu"];
$sql = "UPDATE dstoanha SET sotang = '$sotang',ghichu = '$ghichu' WHERE ten='$ten'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php';</script>";
}
?>