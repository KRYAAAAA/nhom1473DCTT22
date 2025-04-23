<?php
$mapl =$_POST["txtmapl"];
$tenpl =$_POST["txttenpl"];
$ghichu =$_POST["txtghichu"];
$sql = "UPDATE phanloaikp SET tenpl = '$tenpl',ghichu = '$ghichu' WHERE mapl='$mapl'; ";
try {
    $kq = mysqli_query($conn, $sql);
    echo "<script>alert('sửa thành công')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20kho%20ph%c3%b2ng/phanloaikp.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('Lỗi sửa!')</script>";
    echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20kho%20ph%c3%b2ng/phanloaikp.php';</script>";
}
?>