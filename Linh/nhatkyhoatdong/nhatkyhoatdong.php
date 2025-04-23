<?php 
require_once '../khoacon.php' ;
$sql = "SELECT nhatkyhd.*, taikhoan.tencb FROM nhatkyhd JOIN taikhoan ON nhatkyhd.macb =  taikhoan.macb ORDER BY thoigian DESC" ;
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
<body>
<?php 
<<<<<<< HEAD
require_once '/opt/lampp/htdocs/QuanLyTrangThietBi/menutrai.php'
=======
require_once 'C:\xampp\htdocs\QuanLyTrangThietBi\menutrai.php'
>>>>>>> 1729ad7 (đạt)
?>
<form action="" method="post" style="flex:1;">
<div class="content">
    <div class="thanhtren">
        <h5 style="color: rgb(0, 172, 0);">NHẬT KÝ HOẠT ĐỘNG</h5>
<<<<<<< HEAD
        <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
=======
        <a href="http://localhost/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
>>>>>>> 1729ad7 (đạt)
    </div>
    <div class="thanhctrl" style="padding-right: 350px;">
        <div>
            Từ ngày <input type="date" name="date1">
        </div>
        <div>
            Đến ngày <input type="date" name="date2">
        </div>
        <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207);" >
            <input type="text" style="height: 40px; border: none; width: 350px; padding-left: 10px;" placeholder="Nhập mã cán bộ hoặc tên cán bộ để tìm kiếm" name="txttimkiem">
            <button class="btn btn-success" style="height: 40px; border-radius: 0;" name="btntimkiem" type="submit">Tìm kiếm</button>
        </div>
    </div>
    &nbsp Lịch sử hoạt động
    <table class="table table-striped table-bordered table-responsive">
        <tr>
            <th>Mã cán bộ</th>
            <th>Tên cán bộ</th>
            <th>Hoạt động</th>
            <th>Thời gian</th>
        </tr>
        <?php
        include_once 'hienthibang.php';
        ?>
    </table>
</div>
</form> 
    
    
    
</body>
</html>