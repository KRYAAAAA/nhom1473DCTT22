<?php

// Ngày bắt đầu (1/6/2024)
$start_date = strtotime('2024-06-01');

// Ngày hiện tại
$current_date = time();

// Số ngày đã trôi qua
$days_passed = ($current_date - $start_date) / (60 * 60 * 24);

// Tính tuần
$week_number = ceil($days_passed / 7);

// Lấy số thứ của hôm nay (0: Chủ Nhật, 1: Thứ Hai, ..., 6: Thứ Bảy)
$day_of_week = date('w', $current_date);



$txttimkiem = $_POST['txttimkiem'];
$date1 = $_POST['date1'];
if($_POST['date2']==""){
    $date2 = "9999-12-31";
}else $date2 = $_POST['date2'];
$sql = "SELECT dsphieumuon.*, taikhoan.tencb FROM dsphieumuon JOIN taikhoan ON dsphieumuon.macb = taikhoan.macb WHERE (tencb LIKE '%$txttimkiem%' OR maphieu LIKE '%$txttimkiem%' OR loai LIKE '%$txttimkiem%' OR tinhtrang LIKE '%$txttimkiem%' OR dsphieumuon.macb LIKE '%$txttimkiem%') AND (thoigian >= '$date1' AND thoigian <= '$date2' ) ORDER BY maphieu DESC; " ;
if(isset($_POST['homnay'])){
    $sql="SELECT dsphieumuon.*, taikhoan.tencb, ngaymuon.* FROM dsphieumuon JOIN taikhoan ON dsphieumuon.macb = taikhoan.macb JOIN ngaymuon ON ngaymuon.maphieu=dsphieumuon.maphieu WHERE tuan='$week_number' AND thu='$day_of_week'GROUP BY dsphieumuon.maphieu";
}
//  OR macb LIKE '%$txttimkiem%'
?>