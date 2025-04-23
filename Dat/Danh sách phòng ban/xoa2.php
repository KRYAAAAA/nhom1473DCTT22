<?php
$mapb =$_POST["txtmapb"];
$sql = "DELETE FROM phongban WHERE mapb = '$mapb'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'dsphongban.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'dsphongban.php';</script>";
}
?>