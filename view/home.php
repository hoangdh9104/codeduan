<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">
            <?php
              $i=0;
                foreach ($sphome as $sp){
                    extract($sp);
                    $i+=1;
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