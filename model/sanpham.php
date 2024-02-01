<?php
//Sản phẩm trang chủ
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
//Danh sách sản phẩm top 10 boxright
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
// Sản phẩm cl
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $sp = pdo_query($sql);
    return $sp;
}
// Trả về tất cả sp 
function loadall_sanpham($kyw,$iddm){
    $sql="select * from sanpham where 1";
    //where 1 tức là đúng
    if ($kyw!="") {
        $sql.=" and name like '%".$kyw."%'";
    }
    if ($iddm >0) {
        $sql.=" and iddm = '".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
// thongkebluan
function load_thongkebl(){
    $sql="select sp.id,sp.name, count(*) as sobinhluan from  sanpham sp join binhluan bl on sp.id=bl.idpro group by sp.id,sp.name order by sobinhluan desc  ";
    $listtkbl=pdo_query($sql);
    return $listtkbl;
}
// addsp
function insert_sanpham($tensp,$giasp,$filename,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp',$giasp,'$filename','$mota',$iddm)";
    pdo_execute($sql);
}
//deletesp
function delete_sanpham($id){
    $sql="delete  from sanpham where id=".$id;
    pdo_execute($sql);
}
// trả về 1 sp
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}
// capnhat
function update_sanpham($id,$iddm,$tensp,$giasp,$filename,$mota){
    if ($filename!="") {
        $sql="update sanpham set name='".$tensp."',price='".$giasp."',img='".$filename."',mota='".$mota."',iddm='".$iddm."' where id=".$id;
    } else {
        $sql="update sanpham set name='".$tensp."',price='".$giasp."',mota='".$mota."',iddm='".$iddm."' where id=".$id;
    }
    
    pdo_execute($sql);
}