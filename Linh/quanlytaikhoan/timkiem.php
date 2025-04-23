
<?php
    $macb = $_POST['txtmacb']; //tao bien de luu du lieu tu textbox theo name
    $matkhau = $_POST['txtmatkhau'];
    $tencb = $_POST['txttencb'];
    $chucvu =$_POST["txtchucvu"];
    $sql = "SELECT * FROM taikhoan WHERE macb LIKE '%$macb%' AND matkhau LIKE '%$matkhau%' AND tencb LIKE '%$tencb%' AND chucvu LIKE '%$chucvu%' ";

?>