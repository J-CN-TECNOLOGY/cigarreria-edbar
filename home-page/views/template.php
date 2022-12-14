    <!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cigarreria Edbar</title>

        <link rel="shortcut icon" href="views/assets/dist/img/LogoCigarreriaEdbar.png" type="image/x-icon">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
        <!-- Template styles -->
        <link rel="stylesheet" href="views/assets/dist/css/template.css">

        <!-- REQUIRED CSS -->

        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <!-- <link rel="stylesheet" href=""> -->

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="views/assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="views/assets/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE App -->
        <script src="views/assets/dist/js/adminlte.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

        <!-- JS Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <?php
            include "modules/navbar.php";
            include "modules/aside.php";
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <?php include "views/dashboard.php"; ?>

            </div>
            <!-- /.content-wrapper -->

            <?php
            include "modules/footer.php";
            ?>

        </div>
        <!-- ./wrapper -->

        <script>
            function LoadContent(page_php, container) {
                $("." + container).load(page_php);
            }
        </script>
    </body>

    </html>