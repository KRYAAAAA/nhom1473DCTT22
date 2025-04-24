<?php 
try{
    $inputNumbers = $_POST['soluong'];
    foreach ($inputNumbers as $number=>$value) {
        if ($value > 0) {
            $mapb=$_SESSION['mapb'];
            $matb = $_POST["matb"][$number];
            $soluong =  intval($value)*(-1);
            $sql2 = "UPDATE thietbi SET soluong=soluong+$soluong WHERE matb='$matb'";
            $k2 = mysqli_query($conn, $sql2);

            $sql3 = "INSERT INTO thietbiphongban(mapb, matb, soluong) VALUE ('$mapb','$matb','$soluong')";
            $k3 = mysqli_query($conn, $sql3);
        }
    }
    $mp=$_POST["maphieu"];
    echo "<script>alert('Trả thiết bị thành công!')</script>";
    if($_SESSION['userrole']=="admin"){
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban/phongban.php';</script>";
    }else {
        
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban_user/phongban.php';</script>";
    }
}catch(Exception $e){
    echo "<script>alert('Lỗi xác nhận!')</script>";
}

?>