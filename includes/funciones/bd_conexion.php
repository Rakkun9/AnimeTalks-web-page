<?php 
    $conn = new mysqli('localhost:8889', 'root', 'root', 'animetalks');

    if($conn -> connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }
?>