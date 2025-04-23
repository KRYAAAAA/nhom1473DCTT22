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
require_once '/opt/lampp/htdocs/QuanLyTrangThietBi/menutrai.php'
?>
    <div class="content">
        <div class="thanhtren">
            <h5 style="color: rgb(0, 172, 0);">HỆ THỐNG</h5>
            <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
        </div>
        <div style="width: 40%; display: inline-block; font-weight: bold; margin: 50px;">
            <div class="list-group">
                <a href="#" class="list-group-item" style="color: green; font-size: 120%;">Thiết lập</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20kho%20ph%c3%b2ng/phanloaikp.php" class="list-group-item list-group-item-action">Phân loại kho phòng</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Ph%c3%a2n%20lo%e1%ba%a1i%20thi%e1%ba%bft%20b%e1%bb%8b/phanloaitb.php" class="list-group-item list-group-item-action">Phân loại thiết bị</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20m%c3%b4n%20ng%c3%a0nh/dsmonnganh.php" class="list-group-item list-group-item-action">Danh sách môn/ngành</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20ph%c3%b2ng%20ban/dsphongban.php" class="list-group-item list-group-item-action">Danh sách phòng ban</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20t%c3%b2a%20nh%c3%a0/dstoanha.php" class="list-group-item list-group-item-action">Danh sách toà nhà</a>
                <a href="http://qlttb.com/QuanLyTrangThietBi/Dat/Danh%20s%c3%a1ch%20ngu%e1%bb%93n%20c%e1%ba%a5p/dsnguoncap.php" class="list-group-item list-group-item-action">Danh sách nguồn cấp</a>
            </div>
        </div>
        <div style="width: 40%; display: inline-block; font-weight: bold;">
            <div class="list-group">
                <a href="#" class="list-group-item" style="color: green; font-size: 120%;">Hệ thống</a>
                
                <a href="http://qlttb.com/QuanLyTrangThietBi/Linh/quanlytaikhoan/quanlytaikhoan.php" class="list-group-item list-group-item-action">Quản lý tài khoản</a>
              </div>
        </div>
    </div>
    
</body>
</html>