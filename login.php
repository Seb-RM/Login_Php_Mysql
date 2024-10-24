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
    Contenedor Clase Principal: El contenedor principal se utiliza como base 
    para colocar dentro de el todo el contenido de la pagina web.

    Contenedor formulario: Este contenedor sirve como base para el formulario
    identificado con color negro y es la base de todo el formulario.

    Form: Formulario donde ingresaran los datos los usuarios para loguearse y asi 
    poder ingresar a la qie vendría siendo la pagina de inicio.

    - action: Nos ayuda a redireccionar los datos ingresados al archivo de logueo.php
    una vez pulsado el botón.
    -method: Nos ayuda a mandar los datos de forma anónima.

    Contenedor Subtitulo: Contiene el titulo del login.

    Label: Los label están identificados con nombres específicos porque con esto 
    aplicamos css correctamente.

    input: Están especificados con nombres específicos porque con esto aplicamos css correctamente.
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