<?php 
require_once '../khoacon.php' ;
$sql = "SELECT * FROM khophong" ;
?>

<?php
if(isset($_POST['xnthem'])){
    include_once 'them.php';
}
?>
<?php
if(isset($_POST['btntimkiem'])){
    include_once 'timkiem.php';
}
?>
<?php
if(isset($_POST['huy'])){
    echo "<script>window.location.href = '../../Linh/muontra_user/muontra_user.php';</script>";
}
?>
<?php
// Ngày bắt đầu (1/6/2024)
$start_date = strtotime('2025-03-01');

// Ngày hiện tại
$current_date = time();

// Số ngày đã trôi qua
$days_passed = ($current_date - $start_date) / (60 * 60 * 24);

// Tính tuần
$week_number = ceil($days_passed / 7);

// Lấy số thứ của hôm nay (0: Chủ Nhật, 1: Thứ Hai, ..., 6: Thứ Bảy)
$day_of_week = date('w', $current_date);
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
        <div class="thanhctrl" style="padding-right: 800px;">
            <div class="dropdown">
                Tuần <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray; background-color:white;">Chọn tuần</button>
                <ul class="dropdown-menu">
                    <?php 
                    for($i=0; $i <= $week_number; $i++){
                        echo "<li class='dropdown-item'><input disabled type='checkbox' id='' value='".$i."' name='tuan[]'>&nbsp Tuần ".$i."</li>";
                    }
                    for($i=$week_number; $i <= 12; $i++){
                        echo "<li class='dropdown-item'><input type='checkbox' id='' value='".$i."' name='tuan[]'>&nbsp Tuần ".$i."</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="dropdown">
                Thứ <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray; background-color:white;">Chọn thứ</button>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><input type="checkbox" id="" value="2" name="thu[]">&nbsp Thứ 2</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="3" name="thu[]">&nbsp Thứ 3</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="4" name="thu[]">&nbsp Thứ 4</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="5" name="thu[]">&nbsp Thứ 5</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="6" name="thu[]">&nbsp Thứ 6</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="7" name="thu[]">&nbsp Thứ 7</li>
                  <li class="dropdown-item"><input type="checkbox" id="" value="Chủ nhật" name="thu[]">&nbsp Chủ nhật</li>
                </ul>
            </div>
            <div class="dropdown">
                Tiết <br>
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="border: 1px solid gray; background-color:white;">Chọn tiết</button>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><input type="checkbox"  id="" value="1" name="tiet[]">&nbsp Tiết 1</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="2" name="tiet[]">&nbsp Tiết 2</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="3" name="tiet[]">&nbsp Tiết 3</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="4" name="tiet[]">&nbsp Tiết 4</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="5" name="tiet[]">&nbsp Tiết 5</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="6" name="tiet[]">&nbsp Tiết 6</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="7" name="tiet[]">&nbsp Tiết 7</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="8" name="tiet[]">&nbsp Tiết 8</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="9" name="tiet[]">&nbsp Tiết 9</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="10" name="tiet[]">&nbsp Tiết 10</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="11" name="tiet[]">&nbsp Tiết 11</li>
                  <li class="dropdown-item"><input type="checkbox"  id="" value="12" name="tiet[]">&nbsp Tiết 12</li>
                </ul>
            </div>          
        </div>    
        <div style="display: flex; background-color: white; border: 1px solid rgb(207, 207, 207); width:442px; margin:10px" >
                <input type="text" style="height: 40px; border: none; width: 350px; padding-left: 10px;" placeholder="Nhập để tìm kiếm" name="txttimkiem" id="txttimkiem">
                <button class="btn btn-success" style="height: 40px; border-radius: 0;" name = "btntimkiem">Tìm kiếm</button>
            </div>
        Danh sách kho/phòng
        <table class="table table-striped table-bordered" style="width:96vw">
            <tr>
                <th>Mã kho phòng</th>
                <th>Toà nhà</th>
                <th>Tầng</th>
                <th>Tên phòng</th>
                <th>Loại</th>
                <th style ="width: 120px;">Chọn phòng</th>
            </tr>                    
            <?php 
            include_once 'hienthibang.php';
            ?>            
        </table>
        <div style="position: absolute; right: 50px;">
            <button class="btn btn-secondary" name = "huy">Huỷ</button>
            <button class="btn btn-success" name="xnthem" type="submit">Xác nhận</button>
        </div>  
</div>
</form>
</body>
</html>