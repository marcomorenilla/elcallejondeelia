<?php
include 'conexionbd.php';

// prueba página php
$query_inicio = $pdo->query("SELECT texto FROM textos WHERE id_texto = 12");
$logo_tienda = $pdo->query("SELECT enlace FROM imagenes WHERE id_imagen = 11");
$inicio = $query_inicio->fetch(PDO::FETCH_ASSOC);
$logo = $logo_tienda->fetch(PDO::FETCH_ASSOC);
?>

<!-- Sección home -->
<div class="container">
    <div class="box-logo">
        <img src="<?php echo $logo['enlace']; ?>" alt="logo">
    </div>
    <div class="box-title">
        <h1>El Callejón de Elia</h1>
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

