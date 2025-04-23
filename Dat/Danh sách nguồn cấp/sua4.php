<?php
$manc =$_POST["txtmanc"];
$ten =$_POST["txtten"];
$ghichu =$_POST["txtghichu"];
$sql = "UPDATE dsnguoncap SET ten = '$ten',ghichu = '$ghichu' WHERE manc='$manc'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'dsnguoncap.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'dsnguoncap.php';</script>";
}
?>