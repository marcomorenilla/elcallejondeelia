<?php
$host = "localhost"; 
$username = "localmod"; 
$password = "callejondigon"; 
$dbname = "elcallejondeelia"; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    echo "Conexión exitosa a la BBDD";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

/*PDO significa PHP Data Objects. 
Es una extensión de PHP que proporciona 
una interfaz orientada a objetos para interactuar 
con bases de datos relacionales. 
PDO permite a los desarrolladores acceder y 
manipular bases de datos de manera más segura y consistente, 
independientemente del tipo de base de datos 
que se esté utilizando.*/

?>