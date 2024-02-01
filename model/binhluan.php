<?php 
    function loadall_binhluan($idsp){
        $sql = "SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM binhluan
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp";
        $bl =  pdo_query($sql);
        return $bl;
    }
    function insert_binhluan($idpro, $noidung,$iduser){        
        $sql = "INSERT INTO `binhluan` ( `noidung`, `iduser`, `idpro`) VALUES ( '$noidung', '$iduser', '$idpro')";
        pdo_execute($sql);
        
    }
    function loadalll_binhluan($idpro){
        $sql="select * from binhluan where 1 ";
        if($idpro>0) $sql.=" and idpro=$idpro";
        $sql.=" order by iduser ";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }

?>