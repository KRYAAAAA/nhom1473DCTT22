<?php
    require_once 'connect.php';
    $sql = "SELECT * FROM `dsmonnganh` WHERE 1";
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem2.php';
}
?>
<?php
    if(isset($_POST['btnthem'])){
        if(($_POST['txtmamn'] !="") && ($_POST['txttenmn']!="")){
            include_once 'thêm2.php';
        }else{
            echo "<script>alert('Hãy nhập đủ thông tin!')</script>";
        }
    }  
?>
<?php
if(isset($_POST['btnxoa'])){
    include_once 'xoa2.php';
}
?>
<?php
    if(isset($_POST['btnsua'])){
        if(($_POST['txtmamn'] !="") && ($_POST['txttenmn']!="")){
            include_once 'sua2.php';
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
<form action="" method="post" >
<?php 
require_once 'C:\xampp\htdocs\QuanLyTrangThietBi\menutrai.php'
?>
    <div class ="noidung">
        <div class="thanhtren">
            <h5 style="color: rgb(0, 172, 0);">DANH SÁCH MÔN NGÀNH</h5>
            <a href="http://localhost/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
        </div>
        <div class ="nhap">
            <label for="">Mã môn/ngành</label> <br>
            <input type="text" name="txtmamn" id="txtmamn">
        </div>
        <div class ="nhap">
            <label for="">Tên môn/ngành </label> <br>
            <input type="text" name="txttenmn" id="txttenmn">
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
                <th>Mã môn/ngành</th>
                <th>Tên môn/ngành</th>
                <th>Ghi chú</th>
                <th style="width: 70px;"></th>
            </tr>
            <?php
                include_once 'hienthi2.php'
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
            document.getElementById("txtmamn").value = cells[0].textContent;
            document.getElementById("txttenmn").value = cells[1].textContent;
            document.getElementById("txtghichu").value = cells[2].textContent;
            document.getElementById("txtmamn").readOnly = true;
        })
    })
</script>