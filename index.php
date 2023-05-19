<?php
    $pg="inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">

        <div class="row">
            <div class="col-12 cohete mx-auto text-center">
                <a href="proyectos.php"><img src="images/cohete.svg" alt="COHETE"></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center mt-4">
                <div class="my-4">
                    <p class="px-5 py-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-2 pb-4">
                <a href="proyectos.php" class="btn shadow btn-inicio">Conocé mis proyectos</a>
            </div>
        </div>

    </main>

    <footer class="container mt-auto py-4">
        <div class="btn-whatsapp pt-3 pb-4 px-3">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-12 texto-footer">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>

            </div>
            <div class="col-sm-3 col-12 texto-footer">
                <a href="mailto:info@nelsontarche.com.ar">info@nelsontarche.com.ar</a>
            </div>

        </div>
    </footer>

</body>

</html>