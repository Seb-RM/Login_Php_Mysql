<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <title>Formulario de Login</title>
    </head>
    <body>
<!--
    Contenedor_Principal
-->
        <div class="principal">
            <div class="formulario">
                <form action="logueo.php" method="post">
                    <div class="subtitulo">
                        <h2>Login</h2>
                    </div>
                    <label for="usuario" class="LUsuario">Usuario: </label>
                    <label for="contrasena" class="LContrasena">Contraseña:</label>
                    <br><br>
                    <input type="text" name="usuario" id="" class="IUsuario">
                    <input type="password" name="contrasena" id="" class="IContrasena">
                    <br>
                    <button>Ingresar</button>
                </form>
            </div>
        </div>
    </body>
</html>