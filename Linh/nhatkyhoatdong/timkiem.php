<?php
$txttimkiem = $_POST['txttimkiem'];
$txttimkiem = $_POST['txttimkiem'];
$date1 = $_POST['date1'];
if($_POST['date2']==""){
    $date2 = "9999-12-31";
}else $date2 = $_POST['date2'];
$sql = "SELECT nhatkyhd.*, taikhoan.tencb FROM nhatkyhd JOIN taikhoan ON nhatkyhd.macb =  taikhoan.macb WHERE (tencb LIKE '%$txttimkiem%' OR hoatdong LIKE '%$txttimkiem%' OR nhatkyhd.macb LIKE '%$txttimkiem%') AND (thoigian >= '$date1' AND thoigian <= '$date2') ORDER BY thoigian DESC; " ;
?>