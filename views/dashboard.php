<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pagina Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Pagina Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- Create a row -->
        <div class="row">
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProducts"></h4>

                        <p>Productos</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-cart-flatbed"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TOTAL PURCHASES CARD -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="Purchases"></h4>

                        <p>Total de Compras</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-cash-register"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TOTAL CARD SALES -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="Sales"></h4>

                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TOTAL CARD EARNINGS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="Earnings"></h4>

                        <p>Total Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-circle-dollar-to-slot"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- TOTAL CARD EARNINGS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="ProductsMinStock"></h4>

                        <p>Productos poco Stock</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- CARD TOTAL SALES CURRENT DAY -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="SalesToday"></h4>

                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 250px; height:300px; max-height: 350px; width: 100%;">

                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    // AJAX REQUEST FOR INFORMATION CARDS
    $(document).ready(function() {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(response) {
                console.log("respuesta", response);
                $("#totalProducts").html(response[0]['totalProducts']);
                $("#Purchases").html('$ ' + response[0]['Purchases'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#Sales").html('$ ' + response[0]['Sales'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#Earnings").html('$ ' + response[0]['Earnings'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#ProductsMinStock").html(response[0]['ProductsMinStock']);
                $("#SalesToday").html('$ ' + response[0]['SalesToday'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
            }
        });

        setInterval(() => {
            $(document).ready(function() {
                $.ajax({
                    url: "ajax/dashboard.ajax.php",
                    method: 'POST',
                    dataType: 'json',
                    success: function(response) {
                        console.log("respuesta", response);
                        $("#totalProducts").html(response[0]['totalProducts']);
                        $("#Purchases").html('$ ' + response[0]['Purchases'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                        $("#Sales").html('$ ' + response[0]['Sales'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                        $("#Earnings").html('$ ' + response[0]['Earnings'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                        $("#ProductsMinStock").html(response[0]['ProductsMinStock']);
                        $("#SalesToday").html('$ ' + response[0]['SalesToday'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                    }
                });
            });
        }, 10000);

        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            data: {
                'action': 1 //Parameter to obtain the sales for the month
            },
            dataType: 'json',
            success: function(response) {
                console.log("respuesta", response);

                var sale_date = [];
                var total_sale = [];
                var total_sales_month = 0;

                for (let i = 0; i < response.length; i++) {

                    sale_date.push(response[i]['sale_date']);

                    total_sale.push(response[i]['total_sale']);

                    total_sales_month = parseFloat(total_sales_month) + parseFloat(response[i]['total_sale']);
                }

                $(".card-title").html('Ventas del Mes: $ ' + total_sales_month.toString().replace(/\d(?=(\d{3})+\.)/g, "$&,"));

                var barChartCanvas = $("#barChart").get(0).getContext('2d');

                var areaChartData = {
                    labels: sale_date,
                    datasets: [{
                        label: 'Ventas del Mes',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        data: total_sale
                    }]
                }

                var barChartData = $.extend(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                        scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    ctx.fillStyle = '#444';
                                    var y_pos = model.y - 5;
                                    // Make sure data value does not get overFlow and hidden
                                    // When the bar's value is too clase to max value of scale
                                    // Note: The y value is reverse, it counts from top down
                                    if ((scale_max - model.y) / scale_max >= 0.93)
                                        y_pos = model.y + 20;
                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }
                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
            }
        });
    });
</script>