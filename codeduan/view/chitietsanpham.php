<style>
td {
    padding: 0 20px;
}
.s p{
    padding-top:10px;
    text-align:center;
}
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php 
                    $img = $img_path . $img;
                    echo "<img src='$img' width='300'>";
                    echo "<p>$mota</p>";
                ?>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php
                     
                     foreach($binhluan as $value){
                        extract($value);
                        ?>
                            <tr>
                                <td><?php echo $noidung?></td>
                                <td><?php echo $user?></td>
                                <td><?php echo $ngaybinhluan?></td>
                            </tr>
                        <?php
                    }?>
                </table>
            </div>
            <div class="box_search">
                <?php
                    if (!$_SESSION) {?>
                        <div class="s">
                            <p>Phải đăng nhập</p>
                        </div>
                <?php
                    }else{?>
                    
                    <form action="" method="POST">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
                <?php
                    }
                ?>
            </div>
           
        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php foreach($spcl as $value){?>
                <li>
                    <a href="index.php?act=sanphamct&idsp=<?=$value['id']?>">
                        <?=$value['name']?>
                    </a>
                </li>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>


<?php 
    
    
?>