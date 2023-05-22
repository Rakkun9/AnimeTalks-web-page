<?php 
    include "../funciones/bd_conexion.php"; 
    include "../../Register.php"; 

    if(!empty($_POST["registro"])){
        if(empty($_POST["usuario"]) or empty($_POST["correo"]) or empty($_POST["password"])){
            echo  "! Uno de los campos está vacio !";
        } else {
            $usuario = $_POST["usuario"]; 
            $correo = $_POST["correo"]; 
            $pass = $_POST["password"]; 
            $sql = $conn->query("INSERT INTO usuarios (usuario, correo, pass) VALUES ('$usuario', '$correo', '$pass');");
            if($sql == 1){
                echo "! Usuario registrado !";
            }else{
                echo "! Usuario no registrado !";
            }
        }
    }
    mysqli_close($conn); 
?>