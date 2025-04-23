<?php 
$txttimkiem = $_POST['txttimkiem'];
$sql = "SELECT * FROM khophong
WHERE 
makp LIKE '%$txttimkiem%' OR tenkp LIKE '%$txttimkiem%' OR toanha LIKE '%$txttimkiem%' OR loai LIKE '%$txttimkiem%'
";
?>