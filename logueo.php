<?php
// iniciamos el lenguaje php
include('db.php');# Incluimos la conexión al archivo.

# Iniciamos variables para almacenar los datos del formulario.
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
# Iniciamos una sesión.
session_start();
# Globalizar una variable.
$_SESSION['usuario']=$usuario;
# Realizamos la petición a la base de datos usando lenguaje SQL.
$logueo = "SELECT*FROM usuarios WHERE Usuario='$usuario'AND Contrasena='$contrasena'";
# Validamos que los datos hayan sido recogidos correctamente
$validacion = mysqli_query($conexion,$logueo);
#Guardamos los datos en un array.
$filas = mysqli_fetch_row($validacion);
# Verificamos si los datos son correctos mediante una sentencia.
if($filas>0) {
    header('location:inicio.php');
} else {
    echo "Ha ocurrido un error al loguearte, vuelve a intentarlo más tarde.";
}

mysqli_free_result($validacion);