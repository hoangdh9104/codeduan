<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/binhluan.php";
    include "model/taikhoan.php";
    $dsdm = loadall_danhmuc();
    include "view/header.php";
    include "model/thongke.php";
    include "global.php";
    $sphome = loadall_sanpham_home();
    $dstop10 = loadall_sanpham_top10();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            // Trang sản phẩm 
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != "" ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            //Trang chi tiết
            case "sanphamct":
                if(isset($_POST['guibinhluan']) && $_POST['guibinhluan'])  {
                    $idpro = $_GET['idsp'];
                    $iduser = $_SESSION['user']['id'];
                    $noidung =$_POST['noidung'];           
                    insert_binhluan($idpro,$noidung,$iduser);
                }
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $spcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";            
                }
                break;
            case "dangky":
                if(isset($_POST['dangky'])){
                        $email = $_POST['email'];
                        $name = $_POST['user'];
                        $pass = $_POST['pass'];
                        insert_taikhoan($email, $name,$pass);
                        $thongbao="Đăng ký thành công";
                }
                include "view/login/dangky.php";
                break;
            case "dangnhap": 
                if (isset($_POST['dangnhap'])) {
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $login = dangnhap($user, $pass);
                    include "view/home.php";
                }
                break;
            case "dangxuat":
                dangxuat();
                include "view/home.php";
                break;
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $checkmail=checkemail($_POST['email']);
                    if (is_array($checkmail)) {
                        $thongbao="Mật khẩu của bạn là:".$checkmail['pass'];
                    }
                    else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include "view/login/quenmk.php";
                break;
            case "capnhattk":
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $id=$_POST['id'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $email = $_POST['email'];
                    $name = $_POST['user'];
                    $pswd = $_POST['pass'];
                    update_taikhoan($id,$name,$pswd,$email,$address,$tel);
                    $login = dangnhap($_POST['user'], $_POST['pass']);
                    $thongbao="Cập nhật  thành công";
                    header("Location:index.php?act=capnhattk");
                    
                }
                
                include "view/login/capnhattk.php";
                break;
            
        }
    }else{
        include "view/home.php";
    }
   
    include "view/footer.php";
?>