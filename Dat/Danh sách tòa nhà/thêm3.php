<!-- Thêm -->
<?php

    $ten = $_POST['txtten'];
    $sotang = $_POST['txtsotang'];
    $ghichu = $_POST['txtghichu'];
  
    $sql = "INSERT INTO dstoanha(ten,sotang,ghichu) VALUES ('$ten', '$sotang','$ghichu')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php';</script>";
    }

?>