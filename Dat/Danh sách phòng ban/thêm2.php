<!-- Thêm -->
<?php
    $mapb = $_POST['txtmapb'];
    $tenpb = $_POST['txttenpb'];
  
    $sql = "INSERT INTO phongban(mapb,tenpb) VALUES ('$mapb', '$tenpb')";
    try {
        $kq = mysqli_query($conn, $sql);
        echo "<script>alert('Thêm thành công')</script>";
        echo "<script>window.location.href = 'dsphongban.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Lỗi thêm!')</script>";
        echo "<script>window.location.href = 'dsphongban.php';</script>";
    }

?>