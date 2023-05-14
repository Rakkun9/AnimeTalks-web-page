<?php 
include "../funciones/bd_conexion.php";
// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];

if (!empty($_POST["eliminar"])) {
        
        $sql = mysqli_query($conn, "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'");
        //Se supone que aqui se toma el dato y se guarda pero hasta donde veo no hace nada 
        //ahora si hace algo, genialidades de la vida 
} else{
    echo "No se ha podido eliminar el usuario"; 
}
mysqli_close($conn); 
?>