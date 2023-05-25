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
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Shonenn.png" alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Seinenn.png" alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Shoujoo.png" alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Joiseii.png" alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Vida_Escolar.png" alt="Logo AnimeTalks"></a>
        </div>
        <div class="contenedor-enlaces">
            <a href="index.php"><img src="/AnimeTalks/img/imgIndex/Drama.png" alt="Logo AnimeTalks"></a>
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
                        <h2> La inspiración de Makoto Shinkai detrás de Suzume y Miyazaki </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo2.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/bocchi-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> El anime sorpresa que rompió en premios del 2022 </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo3.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/OnePiece-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> Los tambores de la liberación están cerca !Joy boy está de vuelta! </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo4.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/OshiNoko-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> ¿Una industria llena de mentiras? La otra cara de la moneda </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo5.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/reZero-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> ¿Cuándo saldrá la tercera temporada de Re:Zero?  </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo6.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/Akame-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> ¿Es mejor el manga o el anime? Akame ga kill en acción </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo7.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/Chainsaw-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> ¿Chinsaw-man fue la decepción del 2022? </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="main-cuadrado">
            <a href="/AnimeTalks/Articulo8.php">
                <div class="contenedor-imagen">
                    <img src="/AnimeTalks/img/imgArticulos/horimiya-caratula.png" alt="anime">
                </div>
                <div class="contenedor-texto">
                    <div class="contenedor-titulo">
                        <h2> ¿Por qué es tan odiada Hori-san? </h2>
                    </div>
                    <div class="contenedor-info">
                        <h5>Autor del artículo: Admin</h5>
                        <h5>Tópico: Articulo nice</h5>
                        <h5>Fecha de creación: 24/05/2023</h5>
                    </div>
                </div>
            </a>
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