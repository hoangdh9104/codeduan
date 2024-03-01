
<div class="row2">
    <div class="row2 font_title">
      <h1>Biểu đồ</h1>
    </div>
    <div class="row2 form_content ">
      <div
              id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
      </div>
      <div class="row2 form_content " >
          
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <td></td>
                <td><strong>ID</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Tổng bl</strong></td>
            </tr>
            <?php
                foreach($listtkbl as $bl){
                    extract($bl);
                    $xembl='index.php?act=listbinhluan&id='.$id;
                   echo '<tr>
                   <td><input type="checkbox" name="" id=""></td>
                   <td>'.$id.'</td>
                   <td>'.$name.'</td>
                   <td>'.$sobinhluan.'</td>

                   <td><a href="'.$xembl.'">Xem</a></td>
                   
                   
               </tr>' ;
                }

            ?>
      <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
          const data = google.visualization.arrayToDataTable([
            ['Sản phẩm', 'Số lượng bình luận'],
            <?php
            foreach($listtkbl as $binhluan){
              extract($binhluan);
              echo "['$name',$sobinhluan],";
            }
            ?>
          ]);
          

// Set Options
          const options = {
            title:'Thống kê binh luận theo sản phẩm',
            is3D:true
          };

// Draw
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>
  </div>