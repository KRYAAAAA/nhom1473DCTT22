
<?php
    $mapb = $_POST['txtmapb']; //tao bien de luu du lieu tu textbox theo name
    $tenpb = $_POST['txttenpb'];

    $sql = "SELECT * FROM phongban WHERE mapb LIKE '%$mapb%' AND tenpb LIKE '%$tenpb%'";

?>