<!-- Thêm -->
<?php

    $mamn = $_POST['txtmamn'];
    $tenmn = $_POST['txttenmn'];
    $ghichu = $_POST['txtghichu'];
  
    $sql = "INSERT INTO dsmonnganh(mamn,tenmn,ghichu) VALUES ('$mamn', '$tenmn','$ghichu')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20m%c3%b4n%20ng%c3%a0nh/dsmonnganh.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20m%c3%b4n%20ng%c3%a0nh/dsmonnganh.php';</script>";
    }

?>