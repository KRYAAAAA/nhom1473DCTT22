<?php 
require_once '../khoacon.php' ;
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
session_start();
$_SESSION['userid'];
$_SESSION['userrole'];
$result = $conn->query($sql);
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
        <h5 style="color: rgb(0, 172, 0);">THỐNG KÊ</h5>
        <a href="http://qlttb.com/QuanLyTrangThietBi/login/login.php" style="color: gray" onclick="return confirm('Bạn có muốn đăng xuất không')">Đăng xuất</a>
    </div>
    <div class="thanhctrl" style="padding-right: 50px;">
        <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207); " >
            <input type="text" style="height: 40px; border: none; width: 350px; padding-left: 10px; " placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
            <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
        </div> 
        <div>
        <button class="btn btn-success" type="button"><a href="http://qlttb.com/QuanLyTrangThietBi/Linh/thanhly/thanhly.php">Thanh lý thiết bị hỏng</a></button>
        </div>
    </div>
    &nbsp Danh sách phiếu mượn
<table class="table table-bordered">
  <thead style="font-size:85%">
    <tr>
      <th scope="col">Mã thiết bị</th>
      <th scope="col">Tên thiết bị</th>
      <th scope="col">Kho/phòng</th>
      <th scope="col">Môn ngành</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Hỏng</th>
      <th scope="col">Mất</th>
      <th scope="col">Còn lại</th>
      <th scope="col">Đơn vị tính</th>
      <th scope="col">Loại</th>
      <th scope="col">Nguồn gốc</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include_once 'hienthibang.php'
    ?>
  </tbody>
</table>
</div> 
</form>
</body>
</html>