<div class="row2">
         <div class="row2 font_title">
          <h1>THỐNG KÊ SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <td></td>
                <td><strong>ID DANH MỤC</strong></td>
                <td><strong>TÊN DANH MỤC</strong></td>
                <td><strong>SỐ LƯỢNG</strong></td>
                <td><strong>GIÁ MIN</strong></td>
                <td><strong>GIÁ MAX</strong></td>
                <td><strong>GIÁ TRUNG BÌNH</strong></td>
                <td></td>
            </tr>
            <?php
                foreach($listthongke as $thongke){
                    extract($thongke);
                   echo '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$name.'</td>
                   <td>'.$soluong.'</td>
                   <td>'.$gia_min.'$</td>
                   <td>'.$gia_max.'$</td>
                   <td>'.$gia_avg.'$</td>
               </tr>' ;
                }

            ?>
            
            
           </table>
           </div>
           <div class="row mb10 ">

<a href="index.php?act=bieudo"> <input  class="mr20" type="button" value="XEM BIỂU ĐỒ"></a>
           </div>
          </form>
         </div>
        </div>



       
    </div>