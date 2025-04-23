<?php 
$txttimkiem = $_POST['txttimkiem'];
$sql = "SELECT * FROM `phongban` WHERE mapb LIKE '%$txttimkiem%' OR tenpb LIKE '%$txttimkiem%' ORDER BY mapb ASC";
?>