<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>

</head>
<body>
    <form action="login.php" method="POST">
        <h1>INICIAR SESION</h1>   
        <hr>
        <?php
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>

            </p>
        <?php
            }                
        ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Usuario">

        <i class="fa-solid fa-lock"></i>
        <label>Contraseña</label>
        <input type="text" name="Contraseña" placeholder="Contraseña">
        <hr>
        <button type="submit">Login</button>
        <a href="login.php">Registro</a>
    </form>
</body>
</html>