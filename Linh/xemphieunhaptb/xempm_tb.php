<?php
require_once '../khoacon.php' ;
session_start();
$mp = $_SESSION["maphieu"];
$sql = "SELECT phieunhaptb.matb, phieunhaptb.soluong,thietbi. tentb, thietbi.loai, thietbi.monnganh, thietbi.dvt FROM phieunhaptb JOIN thietbi ON phieunhaptb.matb = thietbi.matb WHERE phieunhaptb.maphieu='$mp'" ;

?>
<?php 
if(isset($_POST['xacnhan'])){
    include_once 'xacnhannhap.php';
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
<div class="content" style="padding: 20px;">
    <div class="thanhctrl" style="padding-right: 800px;">
        <div>
            Mã phiếu <br>
            <?php
                echo "<input type='text' maphieu value='$mp' name='maphieu'>";
            ?>       
        </div>
        <div style="margin-left: 50px">
            Phòng ban <br>
            <?php
                $mapb = $_SESSION['mapb'];
                $sqlpb = "SELECT * FROM phongban WHERE mapb='$mapb' ";
                $result = $conn->query($sqlpb);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<input type='text' readonly value='$mapb' name='mapb' style='width:100px'>";     
                            echo "<input type='text' readonly value='".$row['tenpb']."' name='tenpb' style='width:300px'>";  
                        }
                }
            ?>       
        </div>
    </div>    
            Danh sách thiết bị
            <table class="table table-striped table-bordered" >
                <tr>
                    <th>Mã thiết bị</th>
                    <th>Tên thiết bị</th>
                    <th>Loại</th>
                    <th>Môn ngành</th>
                    <th>ĐVT</th>
                    <th>Số lượng</th>
                </tr>
                <?php 
                include_once 'hienthibang.php';
                ?>
            </table>       
    </div>
    <button type="submit" class="btn btn-warning" style="color: white; background-color: rgb(245, 155, 0); font-weight: bold; height: 50px; position: fixed; bottom: 50px; right: 100px;" name ="xacnhan">Xác nhận bàn giao</button>
</div>
</form>
    
    
</body>
</html>