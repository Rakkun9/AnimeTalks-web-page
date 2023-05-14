<?php
session_start();

// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AnimeTalks/css/dependencias/normalize.css">
    <link rel="stylesheet" href="/AnimeTalks/fonts/fonts.css">
    <link rel="stylesheet" href="/AnimeTalks/css/fontello.css">
    <link rel="stylesheet" href="/AnimeTalks/css/adminUsuario.css">
    <title>Configuración Usuario</title>
</head>

<body>
    <header>
        <a href="index.php"><img src="/AnimeTalks/img/AnimeTalksRecortado.png" alt="Logo AnimeTalks"></a>
    </header>
    <main class="principal">
        <div class="contenedor">
            <form action="" id="forma1" name="forma1" method="POST" class="forma1">
                <h2>Cambiar Contraseña</h2>

                <?php 
                include("includes/funciones/bd_conexion.php");
                include("includes/php/cambiarPassWord.php");
                ?>

                <input type="password" name="password" id="password" placeholder="Digite su nueva contraseña"
                    class="input-cuadrados" autocomplete="off">
                <input type="password" name="passwordAgain" id="passwordAgain"
                    placeholder="Digite su contraseña de nuevo" class="input-cuadrados" autocomplete="off">
                <input type="password" name="passwordAntes" id="passwordAntes"
                    placeholder="Digite su antigüa contraseña" class="input-cuadrados" autocomplete="off">

                <div class="boton">
                    <input type="submit" value="Cambiar" class="boton-iniciar" name="cambiar">
                </div>
            </form>

            <div class="formularios">
                <form action="" id="forma2" name="forma2" method="POST" class="forma2">
                    <h2>Cambiar Usuario</h2>
                    
                    <?php 
                    include("includes/funciones/bd_conexion.php");
                    include("includes/php/cambiarUsuario.php");
                    ?>

                    <input type="text" name="usuario" id="usuario" placeholder="Digite su nuevo usuario"
                        class="input-cuadrados" autocomplete="off">

                    <div class="boton">
                        <input type="submit" value="Cambiar" class="boton-iniciar" name="cambiarUsuario">
                    </div>
                </form>
                <form action="" id="forma3" name="forma3" method="POST" class="forma3">
                    <h2>Eliminar cuenta</h2>

                    <?php 
                    include("includes/funciones/bd_conexion.php");
                    include("includes/php/eliminarUsuario.php");
                    ?>

                    <div class="boton">
                        <input type="submit" value="Eliminar" class="boton-iniciar" name="eliminar">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="main-content">
        <div class="footer-main">
            <div class="categorias">
                <h2>EXPLORA LAS CATEGORÍAS</h2>
                <ul>
                    <li><a href="#">Shonen</a></li>
                    <li><a href="#">Seinen</a></li>
                    <li><a href="#">Shoujo</a></li>
                    <li><a href="#">Josei</a></li>
                </ul>
            </div>

            <div class="informacion">
                <h2>NO OLVIDES VER TAMBIÉN</h2>
                <ul>
                    <li><a href="#">Categorías</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                </ul>
            </div>
            <div class="contacto">
                <h2>SIGUENOS</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="index.php"><img src="/AnimeTalks/img/AnimeTalksFondoOscuroRecortado.png"
                        alt="Logo AnimeTalks"></a>
            </div>
        </div>
    </footer>
</body>
</html>