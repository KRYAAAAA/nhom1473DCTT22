<?php
require_once '../connect.php' ;
session_start();
$mp = $_SESSION["maphieu"];
$sql = "SELECT phieumuontb.matb, phieumuontb.soluong,thietbi. tentb, thietbi.loai, thietbi.monnganh, thietbi.dvt FROM phieumuontb JOIN thietbi ON phieumuontb.matb = thietbi.matb WHERE phieumuontb.maphieu='$mp'" ;
?>
<?php 
if(isset($_POST['ghimuon'])){
include_once 'ghimuon.php';
}
?>
<?php 
if(isset($_POST['xacnhantra'])){
include_once 'xacnhantra.php';
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
    <div class="content" style="padding: 20px;">
        <div class="thanhctrl" style="padding-right: 800px;">
            <div>
                Mã phiếu <br>
                <?php
                    echo "<input type='text' readonly value='$mp' name='maphieu' >";
                ?>       
            </div>
            <div class="dropdown">
                Tuần <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray;">Tuần</button>
                <ul class="dropdown-menu">
                    <?php 
                    include_once 'hienthituan.php';
                    ?>
                </ul>
            </div>
            <div class="dropdown">
                Thứ <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray;">Thứ</button>
                <ul class="dropdown-menu">
                    <?php 
                    include_once 'hienthithu.php';
                    ?>
                </ul>
            </div>
            <div class="dropdown">
                Tiết <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray;">Tiết</button>
                <ul class="dropdown-menu">
                    <?php 
                    include_once 'hienthitiet.php';
                    ?>
                </ul>
            </div> 
            <button class="btn btn-warning" style="color: white; background-color: rgb(245, 155, 0); font-weight: bold; height: 40px;" name ="ghimuon">Ghi mượn</button>
            <button class="btn btn-warning" style="color: white; background-color: rgb(245, 155, 0); font-weight: bold; height: 40px;" name = "xacnhantra">Xác nhận trả</button>            
        </div>    
            Danh sách thiết bị
            <table class="table table-striped table-bordered" style="width: 96vw" >
                <tr>
                    <th>Mã thiết bị</th>
                    <th>Tên thiết bị</th>
                    <th>Loại</th>
                    <th>Môn ngành</th>
                    <th>ĐVT</th>
                    <th>Số lượng</th>
                </tr>
                <?php 
                include_once 'hienthibang.php';
                ?>
            </table>       
        </div>   
    </div>
</form>  
</body>
</html>