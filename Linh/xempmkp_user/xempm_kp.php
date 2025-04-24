<?php
require_once '../khoacon.php' ;
session_start();
$mp = $_SESSION["maphieu"];
$sql = "SELECT phieumuonkp.*, khophong.* FROM phieumuonkp JOIN khophong ON khophong.makp = phieumuonkp.makp WHERE maphieu ='$mp' " ;
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
        </div>    
                Danh sách kho/phòng
                <table class="table table-striped table-bordered" style="width: 96vw" >
                    <tr>
                        <th>Mã kho phòng</th>
                        <th>Toà nhà</th>
                        <th>Tầng</th>
                        <th>MTên phòng</th>
                        <th>Loại</th>
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