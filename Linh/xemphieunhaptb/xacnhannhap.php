<?php 
try{
    $inputNumbers = $_POST['soluong'];
    foreach ($inputNumbers as $number=>$value) {
        if ($value > 0) {
            $mapb=$_POST['mapb'];
            $matb = $_POST["matb"][$number];
            $soluong =  $value;
            $sql2 = "INSERT INTO thietbiphongban(mapb, matb, soluong) VALUE ('$mapb','$matb','$soluong')";
            $k2 = mysqli_query($conn, $sql2);

            $sql3 = "UPDATE thietbi SET soluong=soluong-$soluong WHERE matb='$matb'";
            $k3 = mysqli_query($conn, $sql3);
        }
    }
    $mp=$_POST["maphieu"];
    $sql="UPDATE dsphieumuon SET tinhtrang='Đã xác nhận' WHERE maphieu='$mp'";
    echo "<script>alert('Xác nhận bàn giao thành công!')</script>";
    echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/muontra_admin/muontra_admin.php';</script>";
}catch(Exception $e){
    echo "<script>alert('Lỗi xác nhận!')</script>";
}

?>