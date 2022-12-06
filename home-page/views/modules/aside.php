<link rel="stylesheet" href="../../css-modifiable/aside.css">

<script src="https://kit.fontawesome.com/7b4b9c23a4.js" crossorigin="anonymous"></script>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-decoration: none;">
        <img src="views/assets/dist/img/3873446.jpg" alt="CigarreriaEdbar Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cigarreria Edbar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="views/assets/dist/img/alexander-hipp.jpg" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="text-decoration: none;">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link active" onclick="LoadContent('views/dashboard.php', 'content-wrapper')">
                        <i class="fa-solid fa-house"></i>
                        <p>
                            Pagina Principal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/inventory.php', 'content-wrapper')">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <p>
                            Inventario
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/products.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/categories.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorías</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/bulk-upload-products.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Carga Masiva</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/sales.php', 'content-wrapper')">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/cash.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/arqueo.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Arqueo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/sales-reports.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reportes Ventas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/shopping.php', 'content-wrapper')">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <p>
                            Compras
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/orders.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/suppliers.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/purchase-reports.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Compras</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/users.php', 'content-wrapper')">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="LoadContent('views/configuration.php', 'content-wrapper')">
                        <i class="fa-solid fa-gear"></i>
                        <p>
                            Configuración
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../../../cigarreria-edbar/logout.php" class="nav-link">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>
                            Cerrar Sesión
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    $(".nav-link").on('click', function() {
        $(".nav-link").removeClass('active');
        $(this).addClass('active');
    });
</script>