<?php 
//sección eventos
include 'conexionbd.php';
$query_eventos = $pdo->query("SELECT nombre, DATE_FORMAT(dia,'%d-%m-%y') as dia, DATE_FORMAT(dia,'%H:%i') as hora, texto FROM teventos;");
$eventos = $query_eventos->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- tablas eventos -->
<?php foreach ($eventos as $evento): ?>
    <div class="box-evento">
        <table border="1">
            <tr>
                <th class="topleft">Día</th>
                <th class="topright">Descripción</th> 
            </tr>
            <tr>
                <td class="bottomleft" rowspan="2"><?php echo "{$evento['dia']}<br>{$evento['hora']}"?></td>
                <td><?php echo $evento['nombre']?></td>
            </tr>
            <tr>
                <td class="bottomright"><?php echo $evento['texto']?></td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>
           