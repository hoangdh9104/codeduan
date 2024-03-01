<style>
    li{
        padding:10px 10px 5px 0;        
    }
    li>a{
        color:black;
    }
    button a { 
        
        text-decoration: none;
        
    }
</style>
<div class="boxright">
    <!-- Login -->
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <?php if (!$_SESSION) { ?>
        <div class="box_content form_account">
            <form action="index.php?act=dangnhap" method="POST">
            <h4>Tên đăng nhập</h4>
            <input type="text" name="user">
            <h4>Mật khẩu</h4>
            <input type="password" name="pass" id=""><br>
            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
            <br><input type="submit" value="Đăng nhập" name="dangnhap">
            <br>
            <?php if (isset($login)&&$login != '') {
                echo $login;
            } ?>
            </form>
            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        </div>
        <?php } else { ?>
            <p>Hello <?=$_SESSION['user']['user']?></p>            
            <?php
                if ($_SESSION['user']['role']==1) {?>
                   <li class="form_li"><a href="admin/index.php">Trang chủ Admin</a></li>
            <?php
                }
            ?>
            <li class="form_li"><a href="index.php?act=capnhattk">Cập nhật tài khoản</a></li>
            <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
        <?php } ?>
    </div>
    <!-- Danh mục sản phẩm boxright -->
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                      foreach($dsdm as $dm){
                          extract($dm);
                          echo '<li><a href="index.php?act=sanpham&iddm='.$id.'">'.$name.' </a></li>';
                      }
                      ?>
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="keyword">
            </form>
        </div>
    </div>
    <!-- Sản phẩm bán chạy -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        
                        $img=$img_path.$img;
                        echo'<div class="selling_products" style="width:100%;">
                  <img src="'.$img.'" alt="anh">
                  <a href="index.php?act=sanphamct&idsp='.$id.'">'.$name.'</a>
                </div>';
                    }
                    ?>
        </div>
    </div>
</div>
