<?php
$macb =$_POST["txtmacb"];
$sql = "DELETE FROM taikhoan WHERE macb = '$macb'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
}
?>