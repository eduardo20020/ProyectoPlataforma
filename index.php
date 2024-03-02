<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2030498521976382"
     crossorigin="anonymous">
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2030498521976382"
     crossorigin="anonymous">
    </script>
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
                <h4>Comienza a buscar tu servicio</h4>
                <img class="img-fluid" src="img/carnaval-brasileno.png" alt="">
            </div>
            <div class="col-md-8">
                <h2>Inicia sesión</h2>
                <form class="login-form">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
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
        <div class="row text-center">
            <div class="col feature">
                <img class="img-fluid" src="../img/maletin.png" alt="Equipo">
                <h4>Equipo</h4>
                <p>Texto explicativo sobre el equipo.</p>
            </div>
        </div>

        <hr>
        <div id="historia" class="row text-center mb-2">
            <div class="col">
                <h2>Nuestra Historia</h2>
            </div>
        </div>
        <div class="container px-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veniam dolor facere, officia delectus quaerat nemo. Modi doloribus, nihil nesciunt necessitatibus dolores animi officia natus. Recusandae, magni velit. Excepturi, repellat vel. Quas accusamus unde recusandae praesentium iusto fugit natus delectus placeat? Dignissimos eum alias assumenda consequuntur accusamus voluptates facilis vero.</p>
        </div>

        <hr>
        
        <div id="contacto" class="row text-center mb-2">
            <div class="col">
                <h2>Contactanos</h2>
            </div>
        </div>
        <div class="container text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.4740449788465!2d-100.60850142406369!3d25.78793050751982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629d9b90c42e41%3A0xd1aa33b4c4a7dfd7!2sUniversidad%20Polit%C3%A9cnica%20de%20Garc%C3%ADa!5e0!3m2!1ses-419!2smx!4v1709352104304!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2030498521976382"
         crossorigin="anonymous"></script>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-format="autorelaxed"
         data-ad-client="ca-pub-2030498521976382"
         data-ad-slot="7865349824"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <?php require "public/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
