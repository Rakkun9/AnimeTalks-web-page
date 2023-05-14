<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/AnimeTalks/css/dependencias/normalize.css">
    <link rel="stylesheet" href="/AnimeTalks/fonts/fonts.css">
    <link rel="stylesheet" href="/AnimeTalks/css/styleLoginRegister.css">
    <title>Registro</title>
</head>

<body>
    <main class="principal">
        <header>
            <a href="index.php"><img src="img/AnimeTalksRecortado.png" alt="Logo AnimeTalks"></a>
        </header>

        <div class="contenedor">

            <h1>Únete a la tripulación</h1>
            <h1 hidden="true"></h1>

            <form action="" method="POST" action="/includes/php/registro.php">
                <?php 
                include("includes/funciones/bd_conexion.php");
                include("includes/php/registro.php");
                ?>
                <div class="elemento">
                    <input type="text" name="usuario" id="usuario" placeholder="Digite su usuario"
                        class="input-cuadrados" autocomplete="off">
                </div>
                <div class="elemento">
                    <input type="email" name="correo" id="correo" placeholder="Digite su correo"
                        class="input-cuadrados" autocomplete="off">
                </div>
                <div class="elemento">
                    <input type="password" name="password" id="password"
                        placeholder="Digite su contraseña" class="input-cuadrados" autocomplete="off">
                </div>
                <div class="boton">
                    <input type="submit" value="Registrarse" class="boton-iniciar" name="registro">
                </div>
            </form>
            <a href="/AnimeTalks/LogIn.php" class="link-login">¿Ya tienes cuenta? Entra aquí</a>
        </div>
    </main>
</body>

</html>