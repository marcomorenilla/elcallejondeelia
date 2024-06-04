<?php
include 'conexionbd.php';

// Obtener datos de la empresa
$query_empresa = $pdo->query("SELECT nombre,direccion,logo FROM empresa");
$empresa = $query_empresa->fetch(PDO::FETCH_ASSOC);
?>

<!-- Encabezado -->
<div class="row align-items-center">
    <!-- Logo de la empresa -->
    <div class="col-md-3 text-center">
        <img src="<?php echo $empresa['logo']; ?>" alt="Logo de <?php echo $empresa['nombre']; ?>" class="img-fluid">
    </div>
    <!-- Información de la empresa -->
    <div class="col-md-9">
        <h1><?php echo $empresa['nombre']; ?></h1>
        <p>Dirección: <?php echo $empresa['direccion']; ?></p>
    </div>
</div>
