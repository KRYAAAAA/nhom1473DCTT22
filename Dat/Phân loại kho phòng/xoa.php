<?php
$mapl =$_POST["txtmapl"];
$sql = "DELETE FROM phanloaikp WHERE mapl = '$mapl'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20kho%20ph%c3%b2ng/phanloaikp.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20kho%20ph%c3%b2ng/phanloaikp.php';</script>";
}
?>