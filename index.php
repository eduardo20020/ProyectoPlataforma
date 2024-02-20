<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php require_once"public/navBar.php";?>

    <div class="row">

        <div class="col pt-5 text-center">
            <h2 class="mb-4">Registrate como: </h2>
            <div class="row mx-2">
                <div onclick="empresa()" id="empresa" class="col p-4 m-1"><h3>EMPRESA</h3></div>
                <div onclick="pasante()" id="pasante" class="col p-4 m-1"><h3>PASANTE</h3></div>
            </div>
            <br><br>
            <p class="my-4">Ya tienes una cuenta? <a href="">Login aqui.</a></p>
            <br><br>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290" style="width: 130%; height: auto;;">
                 <path fill="#0099ff" fill-opacity="1" d="M0,224L80,197.3C160,171,320,117,480,112C640,107,800,149,960,165.3C1120,181,1280,171,1360,165.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
            </svg>
        </div>


        <div class="col text-center pt-5 px-5" style=" background-color:#0099ff; border-radius:150px;">
            <h2>Por que buscar con nosotros?</h2>
            <p class="mx-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolore iure corporis. Consectetur adipisci suscipit iste a labore ullam cupiditate?</p>
            <img src="IMG/gatocortado.png" alt="">
        </div>

    </div>

    <section id="historia" class="container text-center mt-3">
        <h2>Nuestra historia</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, voluptate? Est, ipsa. Temporibus aperiam esse ut corrupti quisquam blanditiis! Sequi, quas placeat inventore quasi, debitis minima ea id voluptate in distinctio, animi eum voluptates ipsam quos soluta voluptatibus quidem maxime vel consequatur eveniet accusamus veritatis doloribus! Consectetur in adipisci fugit!</p>
        <img src="IMG/gatocortado.png" alt="">
    </section>

    <section class="container text-center mt-3">
        <h2>Nuestra comunidad</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, voluptate? Est, ipsa. Temporibus aperiam esse ut corrupti quisquam blanditiis! Sequi, quas placeat inventore quasi, debitis minima ea id voluptate in distinctio, animi eum voluptates ipsam quos soluta voluptatibus quidem maxime vel consequatur eveniet accusamus veritatis doloribus! Consectetur in adipisci fugit!</p>
        <img src="IMG/gatocortado.png" alt="">

    </section>

    <section class="container text-center mt-3">
        <h2>Nuestra comunidad</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, voluptate? Est, ipsa. Temporibus aperiam esse ut corrupti quisquam blanditiis! Sequi, quas placeat inventore quasi, debitis minima ea id voluptate in distinctio, animi eum voluptates ipsam quos soluta voluptatibus quidem maxime vel consequatur eveniet accusamus veritatis doloribus! Consectetur in adipisci fugit!</p>
        <img src="IMG/gatocortado.png" alt="">

    </section>



    
    <section id="FormEmpresa" class="container my-4 py-4 col-8">
        <h4 class="text-center">FORMULARIO DE EMPRESA</h4>
        <?php require_once"public/formEmpresa.php";?>
    </section>

    <section id="FormPasante" class="container my-4 py-4 col-8">
        <h4 class="text-center">FORMULARIO DE PASANTE</h4>
        <?php require_once"public/formPasante.php";?>
    </section>

    <script>
        function empresa(){
            var elemento = document.getElementById("FormEmpresa");
            elemento.scrollIntoView({ behavior: "smooth", block: "start" });
        }
        function pasante(){
            var elemento = document.getElementById("FormPasante");
            elemento.scrollIntoView({ behavior: "smooth", block: "start" });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>