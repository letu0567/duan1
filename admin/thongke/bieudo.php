
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Danh mục','Số lượng sản phẩm'],
    <?php
    $tongdm=count($thongke);
    $i=1;
    foreach($thongke as $t_k){
        extract($t_k);
        if($i==$tongdm) $dauphay=""; else $dauphay=",";
        echo "['".$t_k['ten_dm']."', ".$t_k['count_sp']."]".$dauphay;
        $i+=1;
    }
        ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phầm theo danh mục', 'width':800, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

