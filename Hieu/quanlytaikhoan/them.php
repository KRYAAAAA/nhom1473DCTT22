<!-- Thêm -->
<?php

    $macb = $_POST['txtmacb'];
    $matkhau = $_POST['txtmatkhau'];
    $tencb = $_POST['txttencb'];
    $phongban =$_POST["phongban"];
    $sql = "INSERT INTO taikhoan(macb,matkhau,tencb,mapb,role) VALUES ('$macb', '$matkhau','$tencb','$phongban','user')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'quanlytaikhoan.php';</script>";
    }

?>