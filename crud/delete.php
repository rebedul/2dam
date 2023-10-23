<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    include("header.html");

    include("con_db.php");
    $conexion = mysqli_connect($servidor,$usuario,$pass,$db);

    $username = $_GET["username"];                         // Recibimos el valor de 'username'
    $sql = "DELETE FROM usuarios WHERE username = '$username'"; // Armamos el query

    if (mysqli_query($conexion,$sql)){                      
        echo "Usuario ".$username." BORRADO correctamente."; // ¿Exito en borrado?
        header("Refresh:0;url=read.php");                    // Demora y devolución a read.php
    }
    else{
        echo "Error al borrar Usuario";
    }
    
    ?>
    
</body>
</html>