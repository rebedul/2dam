<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
 
    <?php
        include("header.html");

       require_once("con_db.php");
       $conexion = mysqli_connect($servidor,$usuario,$pass,$db);
    ?>
    <div class="grandiv">
    <div class="tizquierda">
    </div>

    <div class="tcentro">
    <table class="tablaverdad">
        <tr>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>NombrePropio</th>
            <th>Apellidos</th>
            <th>Borrar</th>
            <th>Actualizar</th>
        </tr>

        <?php
            $sql = "SELECT * from USUARIOS order by username";
            $resul = mysqli_query($conexion,$sql);
            while ($fila = mysqli_fetch_array($resul)){
        ?>
                <tr>
                    <td><?php echo $fila['username']; ?></td>
                    <td><?php echo $fila['password']; ?></td>
                    <td><?php echo $fila['fname']; ?></td>
                    <td><?php echo $fila['lname']; ?></td>
                    <td><button><a href="delete.php?username=<?php echo $fila["username"]?>">ELIMINAR</a></button></td>
                    <td><button><a href="update.php?username=<?php echo $fila["username"]?>">ACTUALIZAR</a></button></td>

                </tr>

                <?php
                    }
                ?>
    </table>
    </div>

    <div class="tderecha">
    </div>
    </div>
         
</body>
</html>