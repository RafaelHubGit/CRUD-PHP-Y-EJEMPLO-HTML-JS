<?php

try {

    $conexion = new PDO('mysql:host=odeth_db_1;port=3306;dbname=pruebaDb;charset=utf8mb4','root','test');
    echo "Conexion OK";

} catch( PDOException $e ) {
    echo "Error: " . $e->getMessage();
}

?>