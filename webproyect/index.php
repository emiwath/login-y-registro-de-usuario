<?php
include('conexion.php');

$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuarios_Proyecto</title>
</head>
<body>
    <div class="usuarios-form">
        <form action="insertar.php" method="POST">
            <h1>CREAR USUARIOS</h1>

            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="username" placeholder="Usuario">
            <input type="text" name="password" placeholder="Contraseña">
            <input type="text" name="email" placeholder="Correo Electronico">

            <input type="submit" value="Registrarse">

        </form>
    </div>

    <div class="usuarios-table">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['lastname'] ?> </th>
                    <th> <?= $row['username'] ?> </th>
                    <th> <?= $row['password'] ?> </th>
                    <th> <?= $row['email'] ?> </th>
                </tr>
                <?php endwhile; ?> 
            </tbody>
        </table>
    </div>
</body>
</html>