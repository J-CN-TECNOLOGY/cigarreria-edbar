<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="home-page/views/assets/dist/img/LogoCigarreriaEdbar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e3f38d3299.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="home-page/css-modifiable/login.css">
    <title>Iniciar sesión en Cigarreria-Edbar</title>
</head>

<body>
    <main>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
            <form class="border shadow p-3 rounded" style="width: 400px;" action="config/check-login.php" method="POST">
                <img src="./home-page/views/assets/dist/img/LogoCigarreriaEdbar.png" alt="" class="container d-flex justify-content-center align-content-center" style="width: 120px;">
                <h1 style="text-align: center;">INICIAR SESIÓN</h1>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['error'] ?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="username" class="form-label"><i class="fa-solid fa-user"></i> Usuario</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-0">
                    <label class="form-label">Seleccionar tipo de usuario: </label>
                </div>
                <select class="form-select mb-3" aria-label="Default select example" name="role">
                    <option value="administrator" selected>Administrador</option>
                    <option value="collaborator">Colaborador</option>
                </select>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg ">Entrar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>