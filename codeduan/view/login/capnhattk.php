<!-- END HEADER -->
<main class="catalog  mb ">

    <div class="boxleft">
    <?php
        if (is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
        }
    ?>
        <div class="box_title">Cập nhật tài khoản</div>
        <div class="box_content form_account">
            <form action="index.php?act=capnhattk" method="post">
                <div>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="email" value="<?=$email?>">
                </div>
                <div>
                    Tên đăng nhập
                    <input type="text" name="user" placeholder="user" value="<?=$user?>">
                </div>
                Mật khẩu
                <div>
                    <input type="text" name="pass" placeholder="pass" value="<?=$pass?>">
                </div>
                <div>
                    <p>Địa chỉ</p>
                    <input type="text" name="address" placeholder="địa chỉ" value="<?=$address?>">
                </div>
                <div>
                    <p>Phone</p>
                    <input type="text" name="tel" placeholder="Số điện thoại" value="<?=$tel?>">
                </div>
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" value="Cập Nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
            </form>
            <?php 
                if(isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
            ?>
        </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>

</main>
