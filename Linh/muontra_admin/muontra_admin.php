<?php 
require_once '../khoacon.php' ;
$sql = "SELECT dsphieumuon.*, taikhoan.tencb FROM dsphieumuon JOIN taikhoan ON dsphieumuon.macb = taikhoan.macb ORDER BY maphieu DESC;" ;
session_start();
$_SESSION['userid'];
$_SESSION['userrole'];
?>
<?php 
if(isset($_POST['btntimkiem'])){
require_once 'timkiem.php';
}
?>
<?php 
if(isset($_POST['btnchitiet'])){
    $_SESSION["maphieu"] = $_POST["txttimkiem"];
    $mp=$_SESSION["maphieu"];
    if($_POST['loaipm'] === "mượn kho/phòng"){
        header('Location: http://qlttb.com/QuanLyTrangThietBi/Linh/xempmkp/xempm_kp.php');
    }
    if($_POST['loaipm'] === "mượn thiết bị"){
        header('Location: http://qlttb.com/QuanLyTrangThietBi/Hieu/xempmtb/xempm_tb.php');      
    } 
    if($_POST['loaipm'] === "yêu cầu nhập thiết bị"){
        $sqlpb="SELECT * FROM phieunhaptb WHERE maphieu ='$mp'; " ;
        $resultpb = $conn->query($sqlpb);
        if ($resultpb->num_rows > 0) {
            while ($row = $resultpb->fetch_assoc()) {
                $_SESSION["mapb"]=$row["mapb"];
            }

        header('Location: http://qlttb.com/QuanLyTrangThietBi/Linh/xemphieunhaptb/xempm_tb.php');      
        }
    } 
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
        <h5 style="color: rgb(0, 172, 0);">QUẢN LÝ THÔNG TIN MƯỢN TRẢ</h5>
        <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
    </div>
    <div class="thanhctrl" style="padding-right: 50px;">
        <div>
            Từ ngày <input type="date" name="date1" id="">
        </div>
        <div>
            Đến ngày <input type="date" name="date2" id="">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="homnay" name="homnay" value="something" style="border: 1px solid gray">
            <label class="form-check-label">Các phiếu mượn trong ngày</label>
        </div>
        <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207); " >
            <input type="text" style="height: 40px; border: none; width: 350px; padding-left: 10px; " placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
            <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
        </div> 
    </div>
    &nbsp Danh sách phiếu mượn
    <table class="table table-striped table-bordered" style="max-height=1000px; overflow-y:auto ;" id="hienthi">
        <tr>
            <th>Thời gian đăng ký</th>
            <th>Mã cán bộ</th>
            <th>Tên cán bộ</th>
            <th>Mã phiếu</th>
            <th>Loại</th>
            <th>Tình trạng</th>
            <th></th>
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