<?php 

include "../funciones/bd_conexion.php";
$id_usuario = $_SESSION['id_del_usuario'];


if(!empty($_POST["cambiar"])){
    if(empty($_POST["password"] or empty($_POST["passwordAntes"])) or empty($_POST["passwordAgain"])){
        echo "! Uno de los campos está vacío !"; 
        //En caso de que alguno de los campos este vacioo se imprime un mensaje y cositas pasan
    } else {
        $password = $_POST ["password"]; 
        $passwordAntes = $_POST ["passwordAntes"]; 
        $sql = mysqli_query($conn, "UPDATE usuarios SET pass = '$password' WHERE id_usuario = '$id_usuario'");

    }
    echo "hola a todos"; 
}
mysqli_close($conn); 

?>