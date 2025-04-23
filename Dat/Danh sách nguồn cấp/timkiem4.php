
<?php
    $manc = $_POST['txtmanc']; //tao bien de luu du lieu tu textbox theo name
    $ten = $_POST['txtten'];
    $ghichu = $_POST['txtghichu'];

    $sql = "SELECT * FROM dsnguoncap WHERE manc LIKE '%$manc%' AND ten LIKE '%$ten%' AND ghichu LIKE '%$ghichu%' ";

?>