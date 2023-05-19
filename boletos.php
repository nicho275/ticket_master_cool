<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus boletos</title>
</head>
<body background = "./fondo.jpg" style = "color:white">

<?php

//Obligatorios

 $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != NULL) ? $_POST["nombre"]: false;
 $apellido = (isset($_POST["apellido"]) && $_POST["apellido"] != NULL) ? $_POST["apellido"]: false;
 $fecha = (isset($_POST["fecha"]) && $_POST["fecha"] != NULL) ? $_POST["fecha"]: false;
 $artista = (isset($_POST["artistas"]) && $_POST["artistas"] != NULL) ? $_POST["artistas"]: false;
 $zona = (isset($_POST["zona"]) && $_POST["zona"] != NULL) ? $_POST["zona"]: false;
 $num_boletos = (isset($_POST["num"]) && $_POST["num"] != NULL) ? $_POST["num"]: false;
 $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != NULL) ? $_POST["lugar"]: false;

 if($nombre == false){
    echo "El nombre no se escribio correctamente, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
 }else if($apellido == false){
    echo "El apellido no se escribio correctamente , vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
 }else if($fecha == false){
    echo "La fecha no se declaro correctamente, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
 }else if($artista == "none"){
    if($zona == "none" && $lugar == "none"){
        echo "No hay ZONA, LUGAR ni ARTISTA seleccionados, vuelva a intentarlo";
        echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
    }else{
    if($zona == "none"){
    echo "No hay una ZONA ni ARTISTA seleccionados, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
    }else if($lugar == "none"){
        echo "No hay un LUGAR ni ARTISTA seleccionados, vuelva a intentarlo";
        echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";

    }else{
   echo "No hay un ARTISTA seleccionado, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
}
    }
 } else if($zona == "none"){
    if($lugar == "none"){
        echo "No hay un LUGAR ni ZONA seleccionada, vuelve a intentarlo";
        echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
    }else{
    echo "No hay una ZONA seleccionada, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
    }
 }else if($num_boletos == false){
    echo "No se ingreso el numero de boletos, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
 }else if($lugar == "none"){
    echo "No hay LUGAR seleccionado, vuelva a intentarlo";
    echo "<br><br><a href='./ticket_master.php'><input type='button' value='Regresar'></a>";
 }else{
   
 //EXTRAS
 $comida = (isset($_POST["comida_extra"]) && $_POST["comida_extra"] != NULL) ? true:false;
 $estacionamiento = (isset($_POST["estacionamiento_extra"]) && $_POST["estacionamiento_extra"] != NULL) ? true:false;
 $souvenir = (isset($_POST["souvenir_extra"]) && $_POST["souvenir_extra"] != NULL) ? true:false;

 /* PROBANDO
 echo $nombre.$apellido.$fecha.$num_boletos.$artista.$zona.$lugar.$comida.$souvenir."<br>";
 echo $comida;
 echo "<br>";
 echo $estacionamiento;
 echo "<br>";
 echo $souvenir;
*/



 }


?>
    
</body>
</html>