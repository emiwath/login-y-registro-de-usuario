<?php
session_start();
include('Conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Contraseña']) ) {

    function validate($data){
        $data = trim ($data);
        $data = stripslashes ($data);
        $data = htmlspecialchars ($data);
        return $data;
    }

    $Usuario = validate($_POST['Usuario']);
    $Contraseña = validate($_POST['Contraseña']);



    if (empty($Usuario)) {
        header("Location: index.php?error=Usuario Requerido");
        exit();
    }elseif (empty($Contraseña)) {
        header("Location: index.php?error=Contraseña Requerida");
        exit();
    }else{

        

        $sql = "SELECT COUNT(*) as contar FROM sena WHERE usuario = '$Usuario' AND contraseña='$Contraseña'";
        $result = mysqli_query($conn, $sql);
        $array1 = mysqli_fetch_array($result);
        if($array1['contar']>0){
            
                $_SESSION['Usuario'] = $Usuario;
            
                //$_SESSION['Id'] = $row['Id'];
                header("Location: administrador.php");
                //exit();
            }else {
                header("Location: Index.php?error=Usuario o Contraseña Incorrectos");
                //exit();
            }

        }
    

} else {
    header("Location: Index.php");
                exit();
}
?>