<?php
    require_once 'connect.php';
    $sql = "SELECT * FROM `taikhoan` LEFT JOIN phongban ON taikhoan.mapb=phongban.mapb";
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
}
?>
<?php
    if(isset($_POST['btnthem'])){
        if(($_POST['txtmacb'] !="") && ($_POST['txtmatkhau']!="") && ($_POST['txttencb']!="") && ($_POST['phongban']!="")){
            include_once 'them.php';
        }else{
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
        }
    }  
?>
<?php
if(isset($_POST['btnxoa'])){
    include_once 'xoa.php';
}
?>
<?php
    if(isset($_POST['btnsua'])){
        if(($_POST['txtmacb'] !="") && ($_POST['txtmatkhau']!="") && ($_POST['txttencb']!="")){
            include_once 'sua.php';
        }else{
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="format.css">
</head>
<body>
<?php 
require_once '/opt/lampp/htdocs/QuanLyTrangThietBi/menutrai.php'
?>
<form action="" method="post" style="flex:1;">
<div class ="noidung">
    <div class="thanhtren">
            <h5 style="color: rgb(0, 172, 0);">QUẢN LÝ TÀI KHOẢN</h5>
            <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
    </div>
    <div class ="nhap">
        <label for="">Mã cán bộ</label> <br>
        <input type="text" name="txtmacb" id="txtmacb">
    </div>
    <div class ="nhap">
        <label for="">Mật khẩu</label> <br>
        <input type="text" name="txtmatkhau" id="txtmatkhau">
    </div>
    <div class ="nhap">
        <label for="">Tên cán bộ</label> <br>
        <input type="text" name="txttencb" id="txttencb">
    </div>
    <div class="nhap">
        <div class="dropdown" style="margin-right: 50px">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray; background-color:white;">Phòng ban</button>
            <ul class="dropdown-menu">
                <?php 
                include_once 'hienthiphongban.php';
                ?>
            </ul>
        </div>
    </div>
    
    <button type="submit" class="btn btn-info" name= "btnthem">Thêm</button>    
    <button type="submit" class="btn btn-info" name="btnsua">Sửa</button>   
    <button type="submit" class="btn btn-info" name="btntimkiem">Tìm kiếm</button>

    <table class="table table-bordered table-striped" id="banghienthi" style="margin-top:20px">
        <tr>
            <th>Mã cán bộ</th>
            <th>Mật khẩu</th>
            <th>Tên cán bộ</th>        
            <th>Phòng ban</th>
            <th style="width: 70px;"></th>
        </tr>
        <?php
            include_once 'hienthi.php'
        ?>
    </table>
</div>
</form>
</body>
</html>

<script>
    const rows = document.querySelectorAll("#banghienthi tr");
    rows.forEach(row => {
        row.addEventListener("click", () => {
            const cells = row.cells;
            document.getElementById("txtmacb").value = cells[0].textContent;
            document.getElementById("txtmatkhau").value = cells[1].textContent;
            document.getElementById("txttencb").value = cells[2].textContent;
            document.getElementById("phongban").value = cells[3].textContent;
            document.getElementById("txtmacb").readOnly = true;
        })
    })
    
</script>