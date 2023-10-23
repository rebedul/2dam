<!-- TODAVÍA EN CONSTRUCCIÓN -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        include("header.html");
        include("con_db.php");
    
    $username = $_GET['username'];

    $conexion = mysqli_connect($servidor,$usuario,$pass,$db);
    $sql = "SELECT * FROM usuarios WHERE username = '$username'";

    $result = mysqli_query($conexion,$sql);

 <h1>MODIFICACIONES</h1>
   
<div class="createcon">
<br>
<br>
    <form action="update2.php" method="post">
        <input type="text" name="username" placeholder="Nombre"><br>
        <input type="password" name="password" placeholder="contraseña"><br>
        <input type="text" name="name" placeholder="Nombre propio"><br>
        <input type="text" name="lastname" placeholder="Apellidos"><br><BR>
        <input type="date" name="fechanac"><br>

        <button type="submit" value="ENVIARDATOS">ENVIAR DATOS</button>
    </form>
</div>

    
    
</body>
</html>