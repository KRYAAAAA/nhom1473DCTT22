<?php 
require_once '../khoacon.php' ;
session_start();
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
?>

<?php
if(isset($_POST['xacnhan'])){
    include_once 'xacnhan.php';
}
?>
<?php
if(isset($_POST['huy'])){
<<<<<<< HEAD
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/thongke/thongke.php';</script>";
=======
        echo "<script>window.location.href = 'http://localhost/QuanLyTrangThietBi/Linh/thongke/thongke.php';</script>";
>>>>>>> 1729ad7 (đạt)
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
<div class="content" style="padding: 2%;">  

Danh sách thiết bị
<table class="table table-bordered" style="width: 96vw">
  <thead style="font-size:85%">
    <tr>
      <th scope="col" style="width:100px">Mã thiết bị</th>
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
      <th scope="col" style="width:100px">Số lượng</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include_once 'hienthibang.php'
    ?>
  </tbody>
</table>
    <div style="position: absolute; right: 50px;">
        <button class="btn btn-secondary" name="huy">Huỷ</button>
        <button class="btn btn-success" name="xacnhan" type="submit">Xác nhận thanh lý</button>
    </div>  
</div>
</form>
</body>
</html>