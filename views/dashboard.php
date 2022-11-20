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

                        <p>Productos Registrados</p>
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
                        <h4 id="totalPurchases"></h4>

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
                        <h4 id="totalSales"></h4>

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
                        <h4 id="totalEarnings"></h4>

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
                        <h4 id="totalProductsMinStock">15</h4>

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
                        <h4 id="totalSalesToday">$ / 250.000</h4>

                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <a style="cursor: pointer;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(document).ready(function() {
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: 'POST',
            dataType: 'json',
            success: function(response) {
                console.log("respuesta", response);
                $("#totalProducts").html(response[0]['totalProducts']);
                $("#totalPurchases").html('$ ' + response[0]['totalPurchases'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#totalSales").html('$ ' + response[0]['totalSales'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#totalEarnings").html('$ ' + response[0]['totalEarnings'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
                $("#totalProductsMinStock").html(response[0]['totalProductsMinStock']);
                $("#totalSalesToday").html('$ ' + response[0]['totalSalesToday'].replace(/\d(?=(\d{3})+\.)/g, "$&"));
            }
        })
    })
</script>