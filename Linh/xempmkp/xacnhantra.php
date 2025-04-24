<?php
if(isset($_POST['maphieu'])){
    $sql = "UPDATE `dsphieumuon` SET tinhtrang = 'Đã trả' WHERE maphieu='$mp' ;" ;
    $result = $conn->query($sql);
    $macb="nad";
    $hoatdong="Xác nhận trả phiếu $mp";
    $thoigian= date('Y-m-d');
    $sql = "INSERT INTO nhatkyhd(macb,hoatdong,thoigian) VALUES ('$macb','$hoatdong','$thoigian')" ;
    $conn->query($sql);
    echo "<script>alert('Xác nhận trả thành công!')</script>";
    echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/muontra_admin/muontra_admin.php';</script>";
}
?>