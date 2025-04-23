
<?php
    $ten = $_POST['txtten']; //tao bien de luu du lieu tu textbox theo name
    $sotang = $_POST['txtsotang'];
    $ghichu = $_POST['txtghichu'];

    $sql = "SELECT * FROM dstoanha WHERE ten LIKE '%$ten%' AND sotang LIKE '%$sotang%' AND ghichu LIKE '%$ghichu%' ";

?>