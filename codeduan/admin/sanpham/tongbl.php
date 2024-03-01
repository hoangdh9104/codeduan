<div class="row2">
         <div class="row2 font_title mb" >
          <h1>DANH SÁCH BÌNH LUẬN</h1>
         </div>
         
         <div class="row2 form_content " >
          
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <td></td>
                <td><strong>ID</strong></td>
                <td><strong>NỘI DUNG</strong></td>
                <td><strong>IDUSSER</strong></td>
                <td><strong>IDPRO</strong></td>
                <td><strong>NGÀY</strong></td>
                <td><strong>CHỨC NĂNG</strong></td>
            </tr>
            <?php
                
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    
                    
                    $xoabl='index.php?act=xoabl&id='.$id;
                   echo '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$noidung.'</td>
                   <td>'.$iduser.'</td>
                   <td>'.$idpro.'</td>
                   <td>'.$ngaybinhluan.'</td>
                   
                   <td>   <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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