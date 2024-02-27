<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php require_once "navBar.php"; ?>

    <div class="container py-5">
        <!-- Registro -->
        <div class="row text-center">
            <div class="col-md-4">
                <h4>Comienza a buscar tu servicio</h4>
                <img class="img-fluid" src="../IMG/vestido-tradicional (1).png" alt="">
            </div>
            <div class="col-md-8">
                <h2>Registrate como: </h2>

                <div class="row py-3 mx-2">
                    <div id="Idempresa" class="col empresa2 p-4 mx-2">
                        <h3>Empresa</h3>
                        <p>ofrece pasantias para ayudar a la comunidad univeristaria</p>
                    </div>

                    <div id="Idpasante" class="col pasante2 p-4 mx-2">
                        <h3>Pasante</h3>
                        <p>busca donde hacer tu servicio social o alguna pasantia</p>
                    </div>

                </div>
                <br>
                Ya tienes una cuenta? <a href="../index.php">Login aqui</a>
            </div>
        </div>

        <hr>

        <!-- Por qué elegirnos -->
        <div class="row text-center mb-2">
            <div class="col">
                <h2>¿Por qué elegirnos?</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 feature">
                <img src="../img/estadisticas.png" alt="Estadísticas">
                <h4>Estadísticas</h4>
                <p>Texto explicativo sobre las estadísticas.</p>
            </div>
            <div class="col-md-6 feature">
                <img src="../img/equipo (4).png" alt="Equipo">
                <h4>Equipo</h4>
                <p>Texto explicativo sobre el equipo.</p>
            </div>
        </div>


        <hr>

        <div id="formempresa" class="d-flex justify-content-center">
            <div class="text-center col-8">
                <h3>registro de empresa</h3>
                <?php require "../public/formEmpresa.php"; ?>
            </div>
        </div>

        <hr>

        <div id="formpasante" class="d-flex justify-content-center">
            <div class="text-center col-8">
                <h3>registro de pasante</h3>
                <?php require "../public/formPasante.php"; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require "../public/footer.php"; ?>

    <!-- Scripts -->
    <script>


        document.getElementById('Idpasante').addEventListener('click', function() {
                window.location.href = "#formpasante";
            
        });
        document.getElementById('Idempresa').addEventListener('click', function() {
                window.location.href = "#formempresa";
            
        });





    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
