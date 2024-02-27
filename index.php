<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social - Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Agrega estilos personalizados aquí */
        .feature {
            margin-bottom: 20px;
        }
        .feature img {
            max-width: 100%;
            height: auto;
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <?php require_once "public/navBar.php"; ?>

    <div class="container py-5">

    <div class="row text-center">
        <div class="col-md-4">
            <h4>Comienza a buscar tu servicio social</h4>
            <img class="img-fluid" src="img/carnaval-brasileno.png" alt="">
        </div>
            <div class="col-md-8">
                <h2>Inicia sesión</h2>
                <form class="login-form">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="Contraseña">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Empresa</option>
                            <option value="2">Pasante</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form>
                <br>
                No tienes una cuenta? <a href="public/registros.php">Registrate aqui</a>
            </div>
        </div>

        <hr>

        <div class="row text-center mb-2">
            <div class="col">
                <h2>¿Por qué elegirnos?</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 feature">
                <img class="img-fluid" src="img/estadisticas.png" alt="Estadísticas">
                <h4>Estadísticas</h4>
                <p>Texto explicativo sobre las estadísticas.</p>
            </div>
            <div class="col-md-6 feature">
                <img class="img-fluid" src="img/equipo (4).png" alt="Equipo">
                <h4>Equipo</h4>
                <p>Texto explicativo sobre el equipo.</p>
            </div>
        </div>
        <div class="col feature text-center">
                <img class="img-fluid" src="../img/maletin.png" alt="Equipo">
                <h4>Equipo</h4>
                <p>Texto explicativo sobre el equipo.</p>
        </div>

    


    </div>

    <?php require "public/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
