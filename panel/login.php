<?php

 
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
        echo "Login motherfucker";
       // session_regenerate_id();
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
    }
}else {

    // usuario incorrecto
    header('Location: index.html');
}
$stmt->close();

// try{
//     if ($stmt = $conn->prepare("SELECT iIdUsuario, cUsuario, cPassword, cNombre, cApellidoP, cnombrelargo, fkidTipoUsuario,iGenero, cProfile FROM usuarios WHERE cUsuario= ? LIMIT 1")) {

//         $stmt->bind_Param("s", $nombre);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $fila = $result->fetch_assoc();
//         if ($pass =$fila['cPassword']) {
   
//             echo 'entro';
//          /*   $_SESSION["id"] =$fila["iIdUsuario"];
//            $_SESSION["usuario"] = $fila["cUsuario"];
//            $_SESSION["Tipo"]=$fila["fkidTipoUsuario"];
//            $_SESSION["Nombre"]=$fila['cNombre'];
//            $_SESSION["ApellidoP"]=$fila['cApellidoP'];
//            $_SESSION["NombreLargo"]=$fila["cnombrelargo"];
//            $_SESSION["iGenero"]=$fila["iGenero"];
//            $_SESSION["img"]=$fila["cProfile"];
//            $_SESSION['tiempo']=time();
//            $_SESSION['acceso']=$fechaActual;
//            $_SESSION[ 'last_activity' ]= time();
          
//            $tipo=$fila['fkidTipoUsuario']; */
           
           
         
//         } else {
//           //header("Location: login.html");
//           echo 'La contraseña no es válida!' ;
//           //echo "<script> alert('La contraseña no es válida!');window.location= '../account/login.html' </script>";
            
             
//         }
   
//     } else {
//         echo "<script> alert('Error al logarse');window.location= '../index.html' </script>";
//        //header("Location:  ../index.html");
//     }
// }catch (Exception $e) {
//     //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
//     header("Location: 404.html");
// }



