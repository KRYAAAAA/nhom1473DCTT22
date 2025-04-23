<?php
$macb =$_POST["txtmacb"];
$matkhau =$_POST["txtmatkhau"];
$tencb =$_POST["txttencb"];
$phongban =$_POST["phongban"];
$sql = "UPDATE taikhoan SET matkhau = '$matkhau',tencb = '$tencb', mapb='$phongban' WHERE macb='$macb'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
}
?>