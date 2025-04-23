<?php 
require_once '../khoacon.php' ;
session_start();
// echo $_SESSION['mapb'];
$sql = "SELECT
    thietbi.*,
    thietbi2.dangmuon,
    thietbi2.choxacnhan,
    COALESCE(soluong - hong - mat - choxacnhan - dangmuon, soluong) AS conlai
FROM
    (thietbi
LEFT JOIN
    (SELECT
        phieumuontb.matb,
        SUM(CASE WHEN dsphieumuon.tinhtrang = 'chưa xác nhận' THEN phieumuontb.soluong ELSE 0 END) AS choxacnhan,
        SUM(CASE WHEN dsphieumuon.tinhtrang = 'chưa trả' THEN phieumuontb.soluong ELSE 0 END) AS dangmuon
    FROM
        phieumuontb
    JOIN dsphieumuon ON phieumuontb.maphieu = dsphieumuon.maphieu
    GROUP BY
        phieumuontb.matb) AS thietbi2
ON thietbi.matb = thietbi2.matb)

" ;
?>

<?php
if(isset($_POST['xnthem'])){
    include_once 'them.php';
}
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
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
                <th>Còn lại</th>
                <th style ="width: 120px;">Số lượng nhập</th>
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