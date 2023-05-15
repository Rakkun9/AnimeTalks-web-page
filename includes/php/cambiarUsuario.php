<?php 
include "../funciones/bd_conexion.php";
// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];

if (!empty($_POST["cambiarUsuario"])) {
    if (empty($_POST["usuario"])) {
        echo "! Uno de los campos está vacio !";
        //En caso de que alguno de los campos este vacio se imprime un mensaje y cositas pasan
    } else {
        $usuario = $_POST["usuario"];
        $sql = mysqli_query($conn, "UPDATE usuarios SET usuario = '$usuario' WHERE id_usuario = '$id_usuario'");
        //Se supone que aqui se toma el dato y se guarda pero hasta donde veo no hace nada 
        //ahora si hace algo, genialidades de la vida 
    }
}
mysqli_close($conn); 
?>