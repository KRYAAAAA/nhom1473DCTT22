<!-- Thêm -->
<?php

    $manc = $_POST['txtmanc'];
    $ten = $_POST['txtten'];
    $ghichu = $_POST['txtghichu'];
  
    $sql = "INSERT INTO dsnguoncap(manc,ten,ghichu) VALUES ('$manc', '$ten','$ghichu')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'dsnguoncap.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'dsnguoncap.php';</script>";
    }

?>