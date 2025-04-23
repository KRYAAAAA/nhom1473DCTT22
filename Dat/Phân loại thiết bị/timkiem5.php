
<?php
    $mapl = $_POST['txtmapl']; //tao bien de luu du lieu tu textbox theo name
    $tenpl = $_POST['txttenpl'];
    $ghichu = $_POST['txtghichu'];

    $sql = "SELECT * FROM phanloaitb WHERE mapl LIKE '%$mapl%' AND tenpl LIKE '%$tenpl%' AND ghichu LIKE '%$ghichu%' ";

?>