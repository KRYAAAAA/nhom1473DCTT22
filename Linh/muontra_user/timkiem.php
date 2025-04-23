<?php
$txttimkiem = $_POST['txttimkiem'];
$date1 = $_POST['date1'];
if($_POST['date2']==""){
    $date2 = "9999-12-31";
}else $date2 = $_POST['date2'];
$sql = "SELECT dsphieumuon.*, taikhoan.tencb FROM dsphieumuon JOIN taikhoan ON dsphieumuon.macb = taikhoan.macb WHERE (tencb LIKE '%$txttimkiem%' OR maphieu LIKE '%$txttimkiem%' OR loai LIKE '%$txttimkiem%' OR tinhtrang LIKE '%$txttimkiem%' OR dsphieumuon.macb LIKE '%$txttimkiem%') AND (thoigian >= '$date1' AND thoigian <= '$date2' )  AND dsphieumuon.macb ='$userid' ORDER BY maphieu DESC;" ;
//  OR macb LIKE '%$txttimkiem%'
?>