<div class="row2">
         <div class="row2 font_title mb" >
          <h1>DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h1>
         </div>
         <div class="row2 form_content " >
          
           <div class="row2 mb10 formds_loai">
           <table border="1">
            <tr>
                <td></td>
                <td><strong>MÃ TK</strong></td>
                <td><strong>TÊN </strong></td>
                <td><strong>MẬT KHẨU</strong></td>
                <td><strong>EMAIL</strong></td>
                <td><strong>ĐỊA CHỈ</strong></td>
                <td><strong>SỐ ĐIỆN THOẠI</strong></td>
                <td><strong>VAI TRÒ</strong></td>
                <td><strong>CHỨC NĂNG</strong></td>
            </tr>
            <?php
                foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $xoatk='index.php?act=xoatk&id='.$id; 
                    $thongbaoxoa = "'"."Bạn có muốn xóa không ?"."'";   
                   echo '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$user.'</td>
                   <td>'.$pass.'</td>
                   <td>'.$email.'</td>
                   <td>'.$address.'</td>
                   <td>'.$tel.'</td>
                   <td>'.$role.'</td>
                   
                   <td>  <a href="'.$xoatk.'" onclick="return confirm('.$thongbaoxoa.')" role="button"><input type="button" value="Xóa"></a></td>
               </tr>' ;
                }

            ?>
            
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
           </div>
          <!-- </form> -->
         </div>
        </div>



       
    </div>