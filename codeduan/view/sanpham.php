<main class="catalog  mb ">
    <div class="boxleft">
        <div ><strong><?= $tendm?></strong></div>
        <div class="items">
            
            <?php
            $i=0;
            foreach ($dssp as $sp){
                $i+=1;
                extract($sp);
                $hinh =  $img_path.$img;                
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '<div class="box_items '.$mr.'">
                    <div class="box_items_img">
                    <img src="'.$hinh.'" alt="">
                    <div class="add" href="index.php?act=sanphamct&idsp='.$id.'">ADD TO CART</div>
                </div>
                <a class="item_name" href="index.php?act=sanphamct&idsp='.$id.'">'.$name.'</a>
                <p class="price">$'.$price.'</p>
                
            </div>';
                    
                }
            ?>

            <!--           <div class="box_items">-->
            <!--             <div class="box_items_img">-->
            <!--                <img src="img/iphoneX.jpg" alt="">-->
            <!--                <div class="add" href="">ADD TO CART</div>-->
            <!--             </div>-->
            <!--              <a class="item_name" href="">SamSung J4</a>-->
            <!--              <p class="price">$4000</p>-->
            <!--              -->
            <!--           </div>-->
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->