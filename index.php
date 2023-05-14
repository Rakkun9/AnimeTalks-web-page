<?php
session_start();

// Estableces la variable global
$id_usuario = $_SESSION['id_del_usuario'];
?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnimeTalks</title>
    <link rel="stylesheet" href="/AnimeTalks/css/dependencias/normalize.css">
    <link rel="stylesheet" href="/AnimeTalks/fonts/fonts.css">
    <link rel="stylesheet" href="/AnimeTalks/css/styles.css">
    <link rel="stylesheet" href="/AnimeTalks/css/fontello.css">

</head>

<body>

    <header class="header">
    <img src="img/AnimeTalksRecortado.png" alt="AnimeTalks" class="imagen-logo">
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
                    <a href="/AnimeTalks/adminUsuario.php">Admin</a>
                    <a href="#">Cerrar sesión</a>
                <?php
                } else {
                    ?>
                    <a href="/AnimeTalks/LogIn.php">Iniciar Sesion</a>
                    <a href="/AnimeTalks/Register.php">Registrarse</a>
                    <?php
                }
                ?>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>

    <!-- Cuerpo como tal del articulo -->

    <!-- Parte de la izquierda de la pagina -->
    <div class="contenedor-cuadrado">
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Shonenn.png"
                        alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Seinenn.png"
                        alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Shoujoo.png"
                        alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Joiseii.png"
                        alt="Logo AnimeTalks"></a>
        </div>
    </div>

    <main class="main-contenedor">
            <div class="main-cuadrado">
                <a href="/AnimeTalks/Articulo.php">
                    <div class="contenedor-imagen">
                        <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
                    </div>
                    <div class="contenedor-texto">
                        <div class="contenedor-titulo">
                            <h2> La otra versión de ti mismo </h2>
                        </div>
                        <div class="contenedor-info">
                            <h5>Autor del artículo: Admin</h5>
                            <h5>Anime: TalTalTalTalTalTal</h5>
                            <h5>Fecha de creación: 07/05/2023</h5>
                        </div>
                    </div>
                </a>
            </div>

        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>

        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
        <div class="main-cuadrado">
            <div class="contenedor-imagen">
                <img src="/AnimeTalks/img/imgIndex/Prueba2.png" alt="anime">
            </div>
            <div class="contenedor-texto">
                <div class="contenedor-titulo">
                    <h2> La otra versión de ti mismo </h2>
                </div>
                <div class="contenedor-info">
                    <h5>Autor del artículo: Admin</h5>
                    <h5>Anime: TalTalTalTalTalTal</h5>
                    <h5>Fecha de creación: 07/05/2023</h5>
                </div>
            </div>
        </div>
    </main>

    <!-- Para empujar el footer. no estrés  -->
    <div class="push">

    </div>
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