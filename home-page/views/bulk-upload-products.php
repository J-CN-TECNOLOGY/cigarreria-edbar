<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario / masiva de Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario / Carga masiva de Productos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Seleccionar Archivo de Carga (Excel):</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" id="upload_product_form">
                            <div class="row">
                                <div class="col-lg-10">
                                    <input type="file" name="fileProducts" id="fileProducts" class="control-form" accept=".xls, xlsx">
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" value="Cargar Productos" class="btn btn-primary" id="btnUpload">
                                </div>
                            </div>
                        </form>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>

        <!-- ROW FOR GIFT IMAGE -->
        <div class="row mx-0">
            <div class="col-lg-12 mx-0 text-center">
                <img src="views/assets/images/loading.gif" id="img_upload" alt="" style="display:none;">
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(document).ready(function() {

        $("#upload_product_form").on('submit', function(e) {

            e.preventDefault();

            if ($("#fileProducts").get(0).files.length == 0) {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar un archivo (Excel).',
                    showConfirmButton: false,
                    timer: 2500
                })
            } else {
                var permitted_extensions = [".xls", ".xlsx"];
                var input_file_products = $("#fileProducts");
                var exp_reg = new RegExp("([a-zA-z0-9\s_\\.\-:])+(" + permitted_extensions.join('|') + ")$");

                if (!exp_reg.test(input_file_products.val().toLowerCase())) {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: 'Debe seleccionar un archivo con extensión .xls o .xlsx.',
                        showConfirmButton: false,
                        timer: 2500
                    })

                    return false;
                }

                var data = new FormData($(upload_product_form)[0]);

                $("#btnUpload").prop("disabled", true);
                $("#img_upload").attr("style", "display:block");
                $("#img_upload").attr("style", "height:200px");
                $("#img_upload").attr("style", "width:200px");

                $.ajax({
                    url: "ajax/products.ajax.php",
                    type: "POST",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log("respuesta", response);

                        if (response > 0) {

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Se registraron ' + response + ' Categorias correctamente',
                                showConfirmButton: false,
                                timer: 2500
                            })

                            $("#btnUpload").prop("disabled", false);
                            $("#img_upload").attr("style", "display:block");

                        }
                    }
                });
            }
        })

    })
</script>