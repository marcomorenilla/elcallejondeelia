<?php
include 'conexionbd.php';

// Obtener datos de los productos
$query_productos = $pdo->query("SELECT id,nombre,descripcion,precio,stock FROM productos where id>1 order by nombre");
$productos = $query_productos->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Lista de Productos -->
<div class="container mt-5">
    <h2>Listado de Productos</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                    <td><?php echo '$' . number_format($producto['precio'], 2); ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
