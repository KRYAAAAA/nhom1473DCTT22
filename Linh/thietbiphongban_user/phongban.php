<?php 
require_once '../khoacon.php' ;
session_start();
$phongban = $_SESSION['userpb'];
$sql = "SELECT thietbiphongban.*, SUM(thietbiphongban.soluong) AS soluong, thietbi.tentb, thietbi.monnganh, thietbi.loai, thietbi.dvt, (SUM(thietbiphongban.soluong)-thietbiphongban.hong-thietbiphongban.mat) AS conlai FROM thietbiphongban JOIN thietbi ON thietbiphongban.matb = thietbi.matb WHERE mapb LIKE '%$phongban%' GROUP BY matb";
?>

<?php
if(isset($_POST['nhapthietbi'])){
    header('Location: http://qlttb.com/QuanLyTrangThietBi/Linh/nhapthietbi/nhapthietbi.php');  
}
?>
<?php
if(isset($_POST['trathietbi'])){
    header('Location: http://qlttb.com/QuanLyTrangThietBi/Linh/trathietbiphongban/trathietbiphongban.php');  
}
?>

<?php
if(isset($_POST['huy'])){
    echo "<script>window.location.href = '../../Hieu/muontra_user/muontra_user.php';</script>";
}
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../format1.css">
    <script src="format1.js"></script>
</head>
<body style="background-color: rgb(223, 223, 223);">
<?php 
require_once '/opt/lampp/htdocs/QuanLyTrangThietBi/menutrai2.php'
?>
<form action="" method="post" style="flex:1;">
<div class="content"> 
    <div class="thanhtren">
        <h5 style="color: rgb(0, 172, 0);">DANH SÁCH THIẾT BỊ PHÒNG BAN</h5>
        <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
    </div>
    <div class="thanhctrl" style="padding-right: 50px;margin-top:1%; ">
        <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207);" >
            <input type="text" style="height: 40px; border: none; width: 500px; padding-left: 10px;" placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
            <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
        </div>
        <div style="margin-right: 400px">
            <button class="btn btn-warning" style="color: white; background-color: rgb(245, 155, 0); font-weight: bold; height: 40px;" name ="nhapthietbi">Gửi yêu cầu nhập thiết bị</button>
        </div>
    </div>
    <br>
    &nbsp &nbsp Danh sách thiết bị phòng ban
        <table class="table table-striped table-bordered" style="flex:1;">
            <tr>
                <th>Mã thiết bị</th>
                <th>tên thiết bị</th>
                <th>Môn ngành</th>
                <th>Loại</th>
                <th>ĐVT</th>
                <th>Số lượng</th>
                <th>Hỏng</th>
                <th>Mất</th>
                <th>Còn lại</th>
            </tr>                    
            <?php 
            include_once 'hienthibang.php';
            ?>            
        </table>
</div>
</form>
</body>
</html>