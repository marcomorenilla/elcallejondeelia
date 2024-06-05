<?php 
// Sección autores página web
include 'conexionbd.php';
$query_imagen = $pdo->query("SELECT enlace FROM imagen_autor WHERE id_autor =1;");
$query_autor = $pdo->query("SELECT id_autor, nombre, apellidos, texto FROM autor WHERE id_autor = 1");
$autor = $query_autor->fetch(PDO::FETCH_ASSOC);
$imagen = $query_imagen->fetch(PDO::FETCH_ASSOC);
?>


<h2>Autores</h2>
        <div class="container">
            <div class="box-autor">
                <img class="img" src="<?php echo $imagen['enlace']?>" alt="">
            </div>
            <div class="box-autor-descripcion">
                <h3><?php echo "{$autor['nombre']} {$autor['apellidos']}"?></h3>
                <p><?php echo $autor['texto']?></p>
                <a href=https://es.wikipedia.org/wiki/J._K._Rowling target="_blank">... Más información</a>
            </div>
        </div>