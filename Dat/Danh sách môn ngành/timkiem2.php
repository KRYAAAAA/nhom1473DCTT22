
<?php
    $mamn = $_POST['txtmamn']; //tao bien de luu du lieu tu textbox theo name
    $tenmn = $_POST['txttenmn'];
    $ghichu = $_POST['txtghichu'];

    $sql = "SELECT * FROM dsmonnganh WHERE mamn LIKE '%$mamn%' AND tenmn LIKE '%$tenmn%' AND ghichu LIKE '%$ghichu%' ";

?>