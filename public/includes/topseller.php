<?php
include 'conexionbd.php';

// Obtener datos de los libros
$query_imagen = $pdo->query("SELECT enlace FROM imagenes WHERE id_imagen = 4");
$query_libros = $pdo->query("SELECT id, titulo, nombre, apellidos, texto FROM topseller ORDER BY id");
$libros = $query_libros->fetchAll(PDO::FETCH_ASSOC);
$imagen = $query_imagen->fetch(PDO::FETCH_ASSOC);
$white_space = ' ';
?>

<h2>Libros más vendidos</h2>
    <div class="container">
        <?php foreach($libros as $libro): ?>
        <div class="box-libros">
            <img class="img" src="<?php echo $imagen['enlace']?>" alt="libro">
            <h3><?php echo $libro['titulo']; ?></h3><br>
            <h3><?php echo "{$libro['nombre']}{$white_space}{$libro['apellidos']}";?></h3><br>
            <p><?php echo $libro['texto'];?></p>
        </div>
        <?php endforeach;?>
    </div>