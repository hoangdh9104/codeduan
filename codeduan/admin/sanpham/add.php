<div class="row2">
  <div class="row2 font_title">
    <h1>THÊM MỚI SẢN PHẨM</h1>
  </div>
  <ul>
      <?php
      if(isset($_SESSION['errors'])){
        foreach($_SESSION['errors'] as $er){
          ?>
          <li style="list-style: none;"><?php echo $er; ?></li>
          <?php
        }
      };
      ?>
    </ul>
  <div class="row2 form_content ">
   
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
        <label> Mã sản phẩm</label> <br>
        <input type="text" name="masp" placeholder="nhập vào mã sản phẩm">
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp" placeholder="nhập vào tên" >
      </div>
      <div class="row2 mb10">
        <label>Giá sản phẩm </label> <br>
        <input type="text" name="giasp" placeholder="nhập vào giá" >
      </div>
      <div class="row2 mb10">
        <label>Ảnh </label> <br>
        <input type="file" name="img">
      </div>
      <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" id="textarea" cols="30" rows="10"></textarea>
      </div>
      <div class="row2 mb10">
        <label>Danh mục</label> <br>
        <select name="iddm" id="">

          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="' . $id . '">' . $name . '</option>';
          };
          ?>
        </select>
      </div>
      <div class="row mb10 ">
        <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && $thongbao != "") echo $thongbao;
      ?>
    </form>
  </div>
</div>