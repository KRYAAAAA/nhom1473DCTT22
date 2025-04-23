<?php
    require_once 'connect.php';
    $sql = "SELECT * FROM `phanloaikp` WHERE 1";
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
}
?>
<?php
    if(isset($_POST['btnthem'])){
        if(($_POST['txtmapl'] !="") && ($_POST['txttenpl']!="")){
            include_once 'thêm.php';
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
        if(($_POST['txtmapl'] !="") && ($_POST['txttenpl']!="")){
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
  
    <link rel="stylesheet" href="../bai1.css">
</head>
<body>
    <form action="" method="post">
    <?php 
require_once 'C:\xampp\htdocs\QuanLyTrangThietBi\menutrai.php'
?>

    <div class ="noidung">
    <div class="thanhtren">
            <h5 style="color: rgb(0, 172, 0);">PHÂN LOẠI KHO PHÒNG</h5>
            <a href="http://localhost/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
        </div>
        <div class ="nhap">
            <label for="">Mã phân loại</label> <br>
            <input type="text" name="txtmapl" id="txtmapl">
        </div>
        <div class ="nhap">
            <label for="">Tên phân loại</label> <br>
            <input type="text" name="txttenpl" id="txttenpl">
        </div>
        <div class ="nhap">
            <label for="">Ghi chú</label> <br>
            <input type="text" name="txtghichu" id="txtghichu">
        </div>
        <button type="submit" class="btn btn-info" name= "btnthem">Thêm</button>    
        <button type="submit" class="btn btn-info" name="btnsua">Sửa</button>
     
        <button type="submit" class="btn btn-info" name="btntimkiem">Tìm kiếm</button>

        <table class="table table-bordered table-striped" id="banghienthi">
            <tr>
                <th>Mã phân loại</th>
                <th>Tên phân loại</th>
                <th>Ghi chú</th>
                <th style="width: 70px;"></th>
            </tr>
            <?php
                include_once 'hienthi.php'
            ?>
        </table>
        <?php

        ?>
    </div>
    </form>
    
    
</body>
</html>

<script>
    const rows = document.querySelectorAll("#banghienthi tr");
    rows.forEach(row => {
        row.addEventListener("click", () => {
            const cells = row.cells;
            document.getElementById("txtmapl").value = cells[0].textContent;
            document.getElementById("txttenpl").value = cells[1].textContent;
            document.getElementById("txtghichu").value = cells[2].textContent;
            document.getElementById("txtmapl").readOnly = true;
        })
    })
</script>