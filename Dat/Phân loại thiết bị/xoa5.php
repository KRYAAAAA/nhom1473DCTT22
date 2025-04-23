<?php
$mapl =$_POST["txtmapl"];
$sql = "DELETE FROM phanloaitb WHERE mapl = '$mapl'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20thi%e1%ba%bft%20b%e1%bb%8b/phanloaitb.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi xóa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20thi%e1%ba%bft%20b%e1%bb%8b/phanloaitb.php';</script>";
}
?>