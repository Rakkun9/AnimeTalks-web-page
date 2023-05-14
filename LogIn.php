<?php
session_start();

// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/AnimeTalks/css/dependencias/normalize.css">
    <link rel="stylesheet" href="/AnimeTalks/fonts/fonts.css">
    <link rel="stylesheet" href="/AnimeTalks/css/styleLoginRegister.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <main class="principal">
        <header>
            <a href="index.php"><img src="img/AnimeTalksRecortado.png" alt="Logo AnimeTalks"></a>
        </header>

        <div class="contenedor">

            <h1>Bienvenido de nuevo</h1>
            <h1 class="nakama">Nakama</h1>
            <form action="" id="forma" name="forma" method="POST">

                <?php 
                include("includes/funciones/bd_conexion.php");
                include("includes/php/login.php");
                ?>
                
                <div class="elemento">
                    <input type="email" name="correo" id="correo" placeholder="Digite su correo"
                        class="input-cuadrados">
                </div>
                <div class="elemento">
                    <input type="password" name="password" id="password" placeholder="Digite su contraseña"
                        class="input-cuadrados">
                </div>
                <div class="boton">
                    <input type="submit" value="Iniciar Sesión" class="boton-iniciar" name="registro">
                </div>
            </form>
            <a href="/AnimeTalks/Register.php">¿No tienes cuenta? Regístrate aquí</a>
        </div>
    </main>
</body>

</html>