<?php
include "../model/danhmuc.php";
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            // danhmuc
        case "listdm":
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "adddm":
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "xoadm":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case "suadm":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case "update";
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($tenloai, $id);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
            // sanpham
        case "listsp":
            if (isset($_POST['listOK']) && $_POST['listOK']) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            $listtkbl = load_thongkebl();
            include "sanpham/list.php";
            break;
        case "addsp":
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $errors = [];
                if (empty($_POST['tensp'])) {
                    $errors[] = "Vui lòng nhập tên sản phẩm";
                }
                if (empty($_POST['giasp'])) {
                    $errors[] = "Vui lòng nhập giá";
                }
                if (empty($_POST['mota'])) {
                    $errors[] = "Vui lòng nhập mô tả";
                }
                if (empty($_FILES['img']['name'])) {
                    $errors[] = "Vui lòng chọn ảnh";
                }
                if (count($errors) >= 1) {
                    $_SESSION['errors'] = $errors;
                } else {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $filename = $_FILES['img']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                    } else {
                        echo "Lỗi up file";
                    }
                    insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case "xoasp":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case "suasp":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";

            break;
        case "updatesp":
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']['name']);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                update_sanpham($id, $iddm, $tensp, $giasp, $filename, $mota);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            header("Location:index.php?act=listsp");
            include "sanpham/list.php";
            break;
            //taikhoan
        case "listtk":
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case "xoatk":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
            //binhluan
        case "listbinhluan":
            if (isset($_GET['id']) && $_GET['id']) {
                $listbinhluan = loadalll_binhluan($_GET['id']);
                include "sanpham/tongbl.php";
            }

            break;
        case "listbl":
            $listbinhluan = loadalll_binhluan(0);
            include "binhluan/list.php";
            break;
        case "xoabl":
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadalll_binhluan(0);
            include "binhluan/list.php";
            break;
            //thongke
        case "thongke":
            $listthongke = load_thongke_sanpham_danhmuc();
            include "thongke/list.php";
            break;
        case "bieudo":
            $listthongke = load_thongke_sanpham_danhmuc();
            include "thongke/bieudo.php";
            break;
        case "bieudobinhluan": //sp
            $listtkbl = load_thongkebl();
            include "sanpham/bieudobinhluan.php";
    }
} else {
    include "home.php";
}
include "footer.php";
