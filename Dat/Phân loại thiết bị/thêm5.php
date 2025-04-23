<!-- Thêm -->
<?php

    $mapl = $_POST['txtmapl'];
    $tenpl = $_POST['txttenpl'];
    $ghichu = $_POST['txtghichu'];
  
    $sql = "INSERT INTO phanloaitb(mapl,tenpl,ghichu) VALUES ('$mapl', '$tenpl','$ghichu')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20thi%e1%ba%bft%20b%e1%bb%8b/phanloaitb.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20thi%e1%ba%bft%20b%e1%bb%8b/phanloaitb.php';</script>";
    }

?>