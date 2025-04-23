<?php 
require_once '../khoacon.php' ;
session_start();
if($_SESSION["userrole"]=="admin"){
    $phongban = $_SESSION['mapb'];
}else $phongban = $_SESSION['userpb'];
$sql = "SELECT thietbiphongban.*, SUM(thietbiphongban.soluong) AS soluong, thietbi.tentb, thietbi.monnganh, thietbi.loai, thietbi.dvt, (SUM(thietbiphongban.soluong)-thietbiphongban.hong-thietbiphongban.mat) AS conlai FROM thietbiphongban JOIN thietbi ON thietbiphongban.matb = thietbi.matb WHERE mapb='$phongban' GROUP BY matb";
?>

<?php
if(isset($_POST['xnthem'])){
    include_once 'xacnhantra.php';
}
?>
<?php
if(isset($_POST['huy'])){
    if($_SESSION['userrole']=="admin"){
<<<<<<< HEAD
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban/phongban.php';</script>";
    }else echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thietbiphongban_user/phongban.php';</script>";
=======
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/thietbiphongban/phongban.php';</script>";
    }else echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/thietbiphongban_user/phongban.php';</script>";
>>>>>>> 1729ad7 (đạt)
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
<form action="" method="post">
<div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207);width: 442px; margin-left:50px;margin-top:50px;" >
    <input type="text" style="height: 40px; border: none; width: 350px; padding-left: 10px; " placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
    <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
</div> 
<div class="content" style="padding: 2%;">  
        Danh sách thiết bị
        <table class="table table-striped table-bordered" style="width:96vw">
            <tr>
                <th>Mã thiết bị</th>
                <th>tên thiết bị</th>
                <th>Môn ngành</th>
                <th>Loại</th>
                <th>ĐVT</th>
                <th>Số lượng</th>
                <th>hỏng</th>
                <th>mất</th>
                <th>Còn lại</th>
                <th style ="width: 120px;">Số lượng trả</th>
            </tr>                    
            <?php 
            include_once 'hienthibang.php';
            ?>            
        </table>
        <div style="position: absolute; right: 50px;">
            <button class="btn btn-secondary" name="huy">Huỷ</button>
            <button class="btn btn-success" name="xnthem" type="submit">Xác nhận</button>
        </div>  
</div>
</form>
</body>
</html>