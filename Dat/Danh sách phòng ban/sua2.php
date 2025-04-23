<?php
$mapb =$_POST["txtmapb"];
$tenpb =$_POST["txttenpb"];
$sql = "UPDATE phongban SET tenpb = '$tenpb' WHERE mapb='$mapb'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'dsphongban.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'dsphongban.php';</script>";
}
?>