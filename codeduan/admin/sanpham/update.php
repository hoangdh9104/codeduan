<?php
    if (is_array($sanpham)) {
        extract($sanpham);
        // var_dump($sanpham);
        // die;

    }
    $imgpath="../upload/".$img;
    if(is_file($imgpath)){
      $img="<img src='".$imgpath."' height=80px>";
    }
    else{
      $img="no photo";
    };
            
?>

<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
         <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <select name="iddm" >
                <?php
                    foreach($listdanhmuc as $danhmuc){
                      
                      ?>
                      <option <?php  
                        if($iddm == $danhmuc['id']) {echo "selected";}
                      ?> value="<?=$danhmuc['id']?>"><?=$danhmuc['name']?></option>
                      <?php
                    }
              
                ?>
            </select>
           </div>
           
           <div class="row2 mb10">
            <label>Tên sản phẩm </label> <br>
            <input type="text" name="tensp" placeholder="nhập vào tên" value="<?=$name?>">
           </div>
           <div class="row2 mb10">
            <label>Giá sản phẩm </label> <br>
            <input type="text" name="giasp" placeholder="nhập vào giá" value="<?=$price?>">
           </div>
           <div class="row2 mb10">
            <label>Ảnh </label> <br>
            <input type="file" name="img" >
            <?=$img?>
           </div>
           <div class="row2 mb10">
            <label>Mô tả </label> <br>
           <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea >
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?=$id?>">
         <input class="mr20" type="submit" name="capnhat"value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           
          </form>
          <?php
            if(isset($thongbao) && $thongbao!="") echo $thongbao;
           ?>
         </div>
        </div>