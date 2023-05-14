<?php

session_start();

// Estableces la variable global

include "../funciones/bd_conexion.php";
include "../../LogIn.php";

// Se hace verificacion de que cuando se le de al boton haga esto

if (!empty($_POST["registro"])) {
    if (empty($_POST["correo"]) or empty($_POST["password"])) {
        echo "! Uno de los campos está vacio !";
        //En caso de que alguno de los campos este vacio se imprime un mensaje

    } else {
        $correo = $_POST["correo"];
        $password = $_POST["password"];
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo = '$correo' AND pass = '$password'");

        //Se guarda una variable donde tiene el id del usuario 

        if($conn){
            $consulta = "SELECT id_usuario FROM usuarios WHERE correo = '$correo' AND pass = '$password' "; 
            $resultado = mysqli_query($conn, $consulta);
            if($resultado){
                while($row = $resultado -> fetch_array()){
                    $id = $row['id_usuario'];
                }
            }
        }
        
        //Se supone que aqui se toma el dato y se guarda pero hasta donde veo no hace nada 
        //ahora si hace algo, genialidades de la vida 

        if (mysqli_num_rows($sql) > 0) {
            echo "! Usuario existente !". $id;

        } else {
            echo "! Usuario no existente !";
        }
    }
}
$_SESSION['id_del_usuario'] = $id;
mysqli_close($conn);

?>