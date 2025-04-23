<?php
$manc =$_POST["txtmanc"];
$sql = "DELETE FROM dsnguoncap WHERE manc = '$manc'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'dsnguoncap.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'dsnguoncap.php';</script>";
}
?>