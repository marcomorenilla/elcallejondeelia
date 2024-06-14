<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../resources/img/gato-negro.png">
    <title>elcallejondeelia</title>
</head>
<body>
    <!--Abro sección principal de cabecera-->
    <header id="home">
        <nav class="navigation-bar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#topseller">Libros más vendidos</a></li>
                <li><a href="#eventos">Eventos</a></li>
                <li><a href="#generos">Géneros</a></li>
                <li><a href="#autores">Autores</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <?php include '../includes/home.php'?>
    </header>
    <!--Cierro cabecera-->

    <!--Abro sección libros más vendidos-->
    <section id="topseller">
        <?php include '../includes/topseller.php'?>

    </section>
    <!--Cierro sección libros más vendidos-->

    <!--Abro sección Eventos-->
    <section id="eventos">
        <h2>Eventos</h2>
        <div class="container">
            <?php include '../includes/eventos.php'?>
        </div>
    </section>
    <!--Cierro sección Eventos-->

    <!--Abro sección géneros-->
    <section id="generos" >
        <h2>Géneros</h2>
        <div class="container">
            <div class="box-novela box">
                <a href="../white.html" target="_blank">Novela</a>
            </div>
            <div class="box-fantasia box">
                <a href="../white.html" target="_blank">Fantasía</a>
            </div>
            <div class="box-ciencia-ficcion box">
                <a href="../white.html" target="_blank">Ciencia ficción</a>
            </div>
            <div class="box-historica box">
                <a href="../white.html" target="_blank">Histórica</a>
            </div>
            <div class="box-informatica box">
                <a href="../white.html" target="_blank">Informática</a>
            </div>
        </div>
    </section>
    <!--Cierro sección géneros-->

    <!--Abro sección autores-->
    <section id="autores">
        <?php include '../includes/autores.php';?>
    </section>
    <!--Cierro sección autores-->

    <!--Abro sección contacto-->
    <section id="contacto">
        <h2>Contacto</h2>
        <div class="container">
            <div class="box-mapa">
                <a href="https://www.google.es/maps/" target="_blank">
                    <img class="img-mapa" src="../resources/img/foto-ubicacion.png" alt="mapa tienda">
                </a>
            </div>
            <div class="box-informacion">
                <ul>
                    <li>El Callejón de Elia</li>
                    <li>Calle falsa 123</li>
                    <li><a href="tel:666555444">666555444</a></li>
                    <li><a href="mailto:elcallejon@gmail.com">elcallejon@gmail.com</a></li>
                </ul>
            </div>  
            <a  href="https://github.com/marcomorenilla" target="_blank">
                <img src="../resources/img/icons/github.svg" alt="github">
            </a>
            <a  href="https://wa.me/666555444" target="_blank">
                <img src="../resources/img/icons/whatsapp.svg" alt="whatsapp">
            </a>
            <a  href="https://www.instagram.com/" target="_blank">
                <img src="../resources/img/icons/instagram.svg" alt="instagram">
            </a>
            <a  href="https://www.facebook.com/" target="_blank">
                <img src="../resources/img/icons/facebook.svg" alt="facebook">
            </a>
        </div>
    </section>
    <!--Cierro sección contacto-->

    <!--Abro footer-->
    <footer>
        <a href="../legal.html" target="_blank">Avisos legales</a>
    </footer>
    <!--Cierro footer-->
</body>
</html>