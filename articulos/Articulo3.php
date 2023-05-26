<?php
session_start();

// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/AnimeTalks/css/dependencias/normalize.css">
    <link rel="stylesheet" href="/AnimeTalks/fonts/fonts.css">
    <link rel="stylesheet" href="/AnimeTalks/css/fontello.css">
    <link rel="stylesheet" href="/AnimeTalks/css/articulo.css">
    <title>Articulo</title>
</head>

<body>
    <header class="header">
        <img src="../img/AnimeTalksRecortado.png" alt="AnimeTalks" class="imagen-logo">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu" class="icon-menu"></label>
            </div>
            <div class="logo">

            </div>
            <nav class="menu">
                <a href="#">Inicio</a>
                <a href="#">Categorias</a>
                <a href="#">Galería</a>
                <a href="/AnimeTalks/LogIn.php">Iniciar</a>
                <a href="/AnimeTalks/Register.php">Registro</a>
            </nav>
        </div>
    </header>

    <!-- Esto es la parte deslizable -->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Categorias</a>
                <a href="#">Galería</a>
                <a href="#">Sobre Nosotros</a>
                <a href="#">Contacto</a>
              
                <?php
    
                    //Esto es para que cambie en funcion si se ha logeado o no
                    //En caso de que no aparecen las opciones que están ahí
                    //Y lo mismo en el caso contrario
                    if (isset($id_usuario)) {
                        ?>
                        <a href="#">Favoritos</a>
                        <a href="#">Configuración</a>
                        <a href="#">Cerrar sesión</a>
                        <a href="/AnimeTalks/adminUsuario.html">Admin</a> 
                    <?php
                    } else {
                        ?>
                        <a href="#">Iniciar Sesion</a>
                        <a href="#">Registrarse</a>
                        <?php
                    }
                    ?>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>

    <!-- Cuerpo como tal del articulo -->

    <article class="main-articulo">
        <div class="imagen-articulo">
            <img src="/AnimeTalks/img/imgArticulos/OnePiece-titulo.png" alt="Imagen del titulo">
            <div class="titulo-articulo">
                <h1> !Los tambores de la liberación están cerca Joy boy está de vuelta! </h1>
            </div>
            <div class="titulo-articulo">
                <!-- No tocar esto porque le da por explotar -->
            </div>
        </div>
        
        <div class="elementos-articulo">
            <a href="#">Tags</a>
            <a href="#">Tags</a>
            <a href="#">Tags</a>
            <h5>Nombre del autor</h5>
            <h5>Fecha</h5>
        </div>
        <div class="cuerpo-articulo">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error inventore ipsam vero ut, dolor porro nemo maiores quidem 
                tempore at eligendi vitae quia voluptatum deserunt quibusdam! 
                Incidunt sed optio ea?</p>

        </div>
    </article>
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