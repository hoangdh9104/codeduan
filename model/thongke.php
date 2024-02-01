<?php
function load_thongke_sanpham_danhmuc(){
    $sql="select dm.id,dm.name, count(*) 'soluong',MIN(price) 'gia_min',MAX(price) 'gia_max',AVG(price) 'gia_avg' FROM danhmuc dm join sanpham sp on dm.id=sp.iddm group by dm.id,dm.name order by soluong desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}

