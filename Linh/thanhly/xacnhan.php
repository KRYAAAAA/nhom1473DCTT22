<!-- Thêm -->
<?php
try{
    $checksl=0;
    $inputNumbers = $_POST['soluong'];
    foreach ($inputNumbers as $number => $value) {
        $checksl= $checksl+intval($value);
    }

    if($checksl>0){
        $inputNumbers = $_POST['soluong'];
        foreach ($inputNumbers as $number => $value) {
            if ($value > 0) {
                $matb = $_POST["matb"][$number];
                $soluong =  $value;
                $sql2 = "UPDATE thietbi SET hong = hong - $value, soluong = soluong - $value WHERE matb = '$matb' ";
                $k2 = mysqli_query($conn, $sql2);
            }
        } 
        echo "<script>alert('Thanh lý thành công!')</script>";
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thongke/thongke.php';</script>";
        }else{
    echo "<script>alert('Hãy nhập số lượng!')</script>";
    echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/nhapthietbi/nhapthietbi.php';</script>";
    }
}catch (Exception $e) {
    echo "<script>alert('Lỗi thanh lý!')</script>";
}
    
?>

