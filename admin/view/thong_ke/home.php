
<div class="container-fluid pt-4 px-4">
    <h3>Trang Thống Kê</h3>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <div id="productchart"></div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <div id="cartchart"></div>
            </div>
        </div>
    </div>
</div>

<!-- Include Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawProductChart);
    google.charts.setOnLoadCallback(drawCartChart);

    // Draw the product chart
 
    function drawProductChart() {
        // var data = google.visualization.arrayToDataTable(Array($arr_thongkesp));
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($arr_thongkesp); ?>);

        var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':550, 'height':500};
        var chart = new google.visualization.PieChart(document.getElementById('productchart'));
        chart.draw(data, options);
    }

    // Draw the cart chart
    function drawCartChart() {
        var data = google.visualization.arrayToDataTable(<?php echo json_encode($arr_thongkedt); ?>);

        var options = {'title':'Thống kê danh thu theo danh mục', 'width':550, 'height':500};
        var chart = new google.visualization.ColumnChart(document.getElementById('cartchart'));
        chart.draw(data, options);
    }
</script>
<!-- Chart End -->
