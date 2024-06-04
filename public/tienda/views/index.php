<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Empresa</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mi Empresa S.A.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#quienesSomos">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Encabezado -->
    <header class="container mt-5">
        <?php include '../includes/empresa_view.php'; ?>
    </header>

    <!-- Cuerpo -->
    <main class="container mt-5">
        <!-- Quiénes Somos -->
        <section id="quienesSomos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Quiénes Somos</h2>
                        <p>
                            En Mi Empresa S.A., nos dedicamos a ofrecer productos de alta
                            calidad y soluciones innovadoras para satisfacer las necesidades
                            de nuestros clientes. Desde nuestros inicios, nos hemos
                            comprometido con la excelencia en cada aspecto de nuestro
                            negocio, desde la selección de los materiales hasta la atención
                            al cliente.
                        </p>
                        <p>
                            Nuestra misión es proporcionar productos que no solo cumplan con
                            las expectativas de nuestros clientes, sino que también superen
                            sus necesidades y contribuyan a mejorar su calidad de vida.
                            Trabajamos con un equipo de profesionales altamente capacitados
                            y apasionados por lo que hacen, lo que nos permite mantenernos a
                            la vanguardia de la industria y ofrecer soluciones innovadoras y
                            eficientes.
                        </p>
                        <p>
                            Valoramos la honestidad, la integridad y el respeto en todas
                            nuestras relaciones comerciales y nos esforzamos por establecer
                            relaciones duraderas con nuestros clientes, proveedores y
                            socios. Creemos en la importancia de la responsabilidad social
                            empresarial y nos comprometemos a contribuir positivamente a las
                            comunidades en las que operamos.
                        </p>
                        <p>
                            Estamos orgullosos de nuestro crecimiento y éxito continuo, pero
                            nunca nos conformamos con el status quo. Nos esforzamos por
                            mejorar constantemente, aprender de nuestros errores y
                            adaptarnos a un mercado en constante cambio. Nos emociona el
                            futuro y estamos ansiosos por continuar creciendo, innovando y
                            creando valor para nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Listado de Productos -->
        <section id="productos">
            <?php include '../includes/productos_view.php'; ?>
        </section>
    </main>

    <!-- Pie de página -->
    <footer class="container mt-5" id="contacto">
        <div class="row">
            <div class="col-md-6">
                <p>Teléfono: +123456789</p>
            </div>
            <div class="col-md-6">
                <p>Email: info@miempresa.com</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#top">Volver arriba</a></p>
            </div>
        </div>
    </footer>

    <!-- jQuery y Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>