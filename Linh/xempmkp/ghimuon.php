<?php
    if(isset($_POST['maphieu'])){
        $sql = "UPDATE `dsphieumuon` SET tinhtrang = 'Chưa trả' WHERE maphieu='$mp' ;" ;
        $result = $conn->query($sql);
        $macb="nad";
        $hoatdong="Ghi mượn phiếu $mp";
        $thoigian= date('dd-mm-YYYY');
        $sql = "INSERT INTO nhatkyhd(macb,hoatdong,thoigian) VALUES ('$macb','$hoatdong','$thoigian')" ;
        $conn->query($sql);
        echo "<script>alert('Xác nhận ghi mượn thành công!')</script>";
        echo "<script>window.location.href = 'http://qlttb.com/QuanLyTrangThietBi/Linh/muontra_admin/muontra_admin.php';</script>";           
    }
?>