<?php
    require_once '../khoacon.php' ;
    $sql = "SELECT * FROM `phongban` ORDER BY mapb ASC";
    session_start();
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
}
?>
<?php
if(isset($_POST['btnchitiet'])){
    $_SESSION["mapb"]=$_POST["txttimkiem"];
    header('Location: http://qlttb.com/QuanLyTrangThietBi/Linh/chitietphongban/chitietphongban.php');
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
    <script src="../format1.js"></script>
</head>
<body>
<?php 
require_once '/opt/lampp/htdocs/QuanLyTrangThietBi/menutrai.php'
?>
<form action="" method="post" style="flex:1;">
<input type="text" name="loaipm" id="loaipm" style="position: fixed; visibility: hidden">
    <div class="content">
        <div class="thanhtren">
            <h5 style="color: rgb(0, 172, 0);">DANH SÁCH CÁC PHÒNG BAN</h5>
            <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
        </div>
        <div class="thanhctrl" style="padding-right: 50px;">
            <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207);" >
                <input type="text" style="height: 40px; border: none; width: 500px; padding-left: 10px;" placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
                <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
            </div>
        </div>
        &nbsp Danh sách phòng ban
        <table class="table table-striped table-bordered" style="max-height=1000px; overflow-y:auto ;" id="hienthi">
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng ban</th>
                <th></th>
            </tr>
            <?php 
                include_once 'hienthibang.php';
            ?> 
        </table>
    </div> 
</form>
</body>
</html>
<script>
    const rows = document.querySelectorAll("#hienthi tr");
    rows.forEach(row => {
        row.addEventListener("click", () => {
            const cells = row.cells;
            document.getElementById("txttimkiem").value = cells[0].textContent;
        })
    })
</script>