<?php 
$txttimkiem = $_POST['txttimkiem'];
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
        phieumuontb.matb
    ) AS thietbi2
    ON thietbi.matb = thietbi2.matb
    )
WHERE 
thietbi.matb LIKE '%$txttimkiem%' OR thietbi.tentb LIKE '%$txttimkiem%' OR thietbi.monnganh LIKE '%$txttimkiem%' OR thietbi.loai LIKE '%$txttimkiem%'
";
?>