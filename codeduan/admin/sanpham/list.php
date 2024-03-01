<style>
    .row2 form{
        padding-bottom:10px;
    }
</style>

<div class="row2">
         <div class="row2 font_title mb" >
          <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
         </div>
         <form action="#" method="POST">
            <input type="text" name="kyw">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                    };
                
                ?>
            </select>
            <input type="submit" name="listOK"value="GO">
            </form>
         <div class="row2 form_content " >
          
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <td></td>
                <td><strong>MÃ LOẠI</strong></td>
                <td><strong>TÊN LOẠI</strong></td>
                <td><strong>Giá</strong></td>
                <td><strong>ẢNH</strong></td>
                <td><strong>LƯỢT XEM</strong></td>
                <td><strong>MÔ TẢ</strong></td>
                <td><strong>CHỨC NĂNG</strong></td>
                <td><strong>Số bình luận</strong></td>
            </tr>
            <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp='index.php?act=suasp&id='.$id;
                    $xoasp='index.php?act=xoasp&id='.$id;
                    $thongbaoxoa = "'"."Bạn có muốn xóa không ?"."'";

                    $imgpath="../upload/".$img;
                    if(is_file($imgpath)){
                        $img="<img src='".$imgpath."' height=80px>";
                    }
                    else{
                        $img="no photo";
                    }
                   echo '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$name.'</td>
                   <td>'.$price.'$</td>
                   <td>'.$img.'</td>
                   <td>'.$luotxem.'</td>
                   <td>'.$mota.'</td>

                   
                   <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>   <a href="'.$xoasp.'" onclick="return confirm('.$thongbaoxoa.')" role="button"><input type="button" value="Xóa"></a></td>
               </tr>' ;
                }

            ?>
            
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
<a href="index.php?act=bieudobinhluan"> <input  class="mr20" type="button" value="Biểu đồ"></a>
           </div>
          <!-- </form> -->
         </div>
        </div>



       
    </div>