<?php

session_start();
require("../PHP/conexion.php");
$nombre =$_POST["username"];
$pass = $_POST["password"];

if ($stmt = $conn->prepare('SELECT  cUsuario, cPassword FROM usuarios WHERE cUsuario = ?')) {

    // parámetros de enlace de la cadena s

    $stmt->bind_param('s', $nombre);
    $stmt->execute();
}
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($cUsuario, $cPassword);
    $stmt->fetch();

    // se confirma que la cuenta existe ahora validamos la contraseña

    if ($_POST['password'] === $cPassword) {

        $query="SELECT * FROM usuarios where cUsuario='$nombre' and iEstatus=1";
        $result=$conn->query($query);
        $row=$result->fetch_assoc();
        if($result->num_rows>0){
            $_SESSION["id"]=$row["idUsuario"];
            $_SESSION["usuario"] = $row["cUsuario"];
            $_SESSION["Nombre"]=$row['cNombre'];
            $_SESSION["NombreLargo"]=$row["cnombrelargo"];

            header("Location:../panel/index.php");
        }

        
        /*$_SESSION["id"] =$fila["idUsuario"];
           $_SESSION["usuario"] = $fila["cUsuario"];
            $_SESSION["Tipo"]=$fila["fkidTipoUsuario"];
           $_SESSION["Nombre"]=$fila['cNombre'];
           $_SESSION["ApellidoP"]=$fila['cApellidoP'];
           $_SESSION["NombreLargo"]=$fila["cnombrelargo"];
           $_SESSION["iGenero"]=$fila["iGenero"];
           $_SESSION["img"]=$fila["cProfile"];
           $_SESSION['tiempo']=time();
           $_SESSION['acceso']=$fechaActual;
           $_SESSION[ 'last_activity' ]= time();
          
           $tipo=$fila['fkidTipoUsuario']; */
    }else
    {
        header('Location: ../index.html');
        session_destroy();
    }
}else {

    // usuario incorrecto
    header('Location: ../index.html');
    session_destroy();
}
//$stmt->close();

