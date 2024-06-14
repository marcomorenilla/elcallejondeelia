<?php
include 'conexionbd.php';

// prueba página php
$query_inicio = $pdo->query("SELECT texto FROM textos WHERE id_texto = 12");
$logo_tienda = $pdo->query("SELECT enlace FROM imagenes WHERE id_imagen = 11");
$query_titulo = $pdo -> query("SELECT texto FROM textos WHERE id_texto=16");
$inicio = $query_inicio->fetch(PDO::FETCH_ASSOC);
$logo = $logo_tienda->fetch(PDO::FETCH_ASSOC);
$titulo = $query_titulo ->fetch(PDO::FETCH_ASSOC);
?>

<!-- Sección home -->
<div class="container">
    <div class="box-logo">
        <img src="<?php echo $logo['enlace']; ?>" alt="logo">
    </div>
    <div class="box-title">
        <h1><?php echo $titulo['texto']?></h1>
        <p><?php echo $inicio['texto']; ?></p><br><br>
        <form>
            <label>Buscar: </label>
            <br>
            <input type="search" placeholder="Introduce el título o autor del libro...">
            <br>
            <button type="submit">Buscar</button>
        </form>
    </div> 
</div>

