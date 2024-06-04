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
        <?php include '../includes/welcome.php'?>
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
            <div class="box-evento">
                <table border="1">
                    <tr>
                        <th class="topleft">Día</th>
                        <th class="topright">Descripción</th> 
                    </tr>
                    <tr>
                        <td class="bottomleft" rowspan="2">27/05/2024 <br>10:15</td>
                        <td>Club de lectura</td>
                    </tr>
                    <tr>
                        <td class="bottomright">Este mes contamos con la presencia de toda una experta literiaria ya que ella misma ha escrito más de la mitad que vendemos. <br><br> Acércate y disfruta de su último éxito en un círculo de lectores en el que hemos cuidado cada detalle.<br><br> Además gracias a nuestros compañeros de la cafetería de especialidad RoastCoffery And Talks disfruta del mejor café al final del evento. <br><br> No se te olvide escribirnos por cualquier red social para reservar tu plaza.<br><br>Siéntete como en casa. </td>
                    </tr>
                </table>
            </div>
            <div class="box-evento">
                <table border="1">
                    <tr>
                        <th class="topleft">Día</th>
                        <th class="topright">Descripción</th> 
                    </tr>
                    <tr>
                        <td class="bottomleft" rowspan="2">28/05/2024 <br>18:30</td>
                        <td>Exposición fotográfica</td>
                    </tr>
                    <tr>
                        <td class="bottomright">Tenemos el placer de presentaros la obra de una de las fotógrafas más influyentes del momento. <br><br>Disfruta de sus mejores fotografías en nuestra tienda mientras disfrutas de una consumición incluída con la entrada y te deléitas con el catering que nos van a preparar nuestros amigos de RoastCoffery And Talks <br><br>No se te olvide escribirnos por cualquier red social para reservar tu plaza.<br><br>Siéntete como en casa.</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!--Cierro sección Eventos-->

    <!--Abro sección géneros-->
    <section id="generos" >
        <h2>Géneros</h2>
        <div class="container">
            <div class="box-novela box">
                <a href="white.html" target="_blank">Novela</a>
            </div>
            <div class="box-fantasia box">
                <a href="white.html" target="_blank">Fantasía</a>
            </div>
            <div class="box-ciencia-ficcion box">
                <a href="white.html" target="_blank">Ciencia ficción</a>
            </div>
            <div class="box-historica box">
                <a href="white.html" target="_blank">Histórica</a>
            </div>
            <div class="box-informatica box">
                <a href="white.html" target="_blank">Informática</a>
            </div>
        </div>
    </section>
    <!--Cierro sección géneros-->

    <!--Abro sección autores-->
    <section id="autores">
        <h2>Autores</h2>
        <div class="container">
            <div class="box-autor">
                <img class="img" src="resources/img/pexels-minan1398-1425146.jpg" alt="">
            </div>
            <div class="box-autor-descripcion">
                <h3>J.K Rowling</h3>
                <p>Joanne Rowling (Yate, 31 de julio de 1965), quien escribe bajo los seudónimos de J. K. Rowling​ y Robert Galbraith, es una escritora, productora de cine y guionista británica, conocida por ser la autora de la serie de libros Harry Potter, que han superado los quinientos millones de ejemplares vendidos.<br><br> Este éxito literario supuso que la Sunday Times Rich List de 2008 estimase la fortuna de Rowling en 560 millones de libras, lo que la situó como la duodécima mujer más rica en el Reino Unido.<br><br>​ Asimismo, Forbes ubicó a Rowling en el cuadragésimo puesto en su lista de las celebridades más poderosas de 2007 y la revista Time la seleccionó como «personaje del año» ese mismo año, resaltando la inspiración social, moral y política que les ha dado a los personajes de Harry Potter.<br><br>Aunque escribe bajo el seudónimo J. K. Rowling,​ su nombre real es Joanne Rowling.<br><br> Antes de publicar su primera novela, la editorial Bloomsbury temió que los lectores más jóvenes tuvieran reticencia a comprar libros escritos por una mujer y le pidieron que utilizase dos iniciales y no su nombre de pila.<br><br>Como no tiene segundo nombre, eligió la letra K como su segunda inicial en honor a su abuela paterna Kathleen.<br><br>El nombre Kathleen nunca ha sido parte de su verdadero nombre.<br><br>​ Después de su matrimonio, a menudo utiliza el nombre Joanne Murray cuando lleva a cabo asuntos privados.<br><br>Se llama a sí misma Jo: «Nadie me llamaba Joanne cuando era niña, a menos que estuviesen enfadados conmigo».</p>
                <a href=https://es.wikipedia.org/wiki/J._K._Rowling target="_blank">Más información</a>
            </div>

        </div>
    </section>
    <!--Cierro sección autores-->

    <!--Abro sección contacto-->
    <section id="contacto">
        <h2>Contacto</h2>
        <div class="container">
            <div class="box-mapa">
                <a href="https://www.google.es/maps/" target="_blank">
                    <img class="img-mapa" src="resources/img/foto-ubicacion.png" alt="mapa tienda">
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
                <img src="resources/img/icons/github.svg" alt="github">
            </a>
            <a  href="https://wa.me/666555444" target="_blank">
                <img src="resources/img/icons/whatsapp.svg" alt="whatsapp">
            </a>
            <a  href="https://www.instagram.com/" target="_blank">
                <img src="resources/img/icons/instagram.svg" alt="instagram">
            </a>
            <a  href="https://www.facebook.com/" target="_blank">
                <img src="resources/img/icons/facebook.svg" alt="facebook">
            </a>
        </div>
    </section>
    <!--Cierro sección contacto-->

    <!--Abro footer-->
    <footer>
        <a href="white.html" target="_blank">Avisos legales</a>
    </footer>
    <!--Cierro footer-->
</body>
</html>