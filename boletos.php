<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus boletos</title>
    <link rel = "icon" href = "https://pbs.twimg.com/profile_images/529679327328100352/Z_0yZK26_400x400.jpeg" type = "image/jpg">
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

 //EXTRAS
 $comida = (isset($_POST["i"])) ? 1:0;
 $estacionamiento = (isset($_POST["e"])) ? 1:0;
 $souvenir = (isset($_POST["a"])) ? 1:0;

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
   
 

 /* //PROBANDO
 echo $nombre.$apellido.$fecha.$num_boletos.$artista.$zona.$lugar.$comida.$souvenir."<br>";
 echo $comida;
 echo "<br>";
 echo $estacionamiento;
 echo "<br>";
 echo $souvenir;
 */
// /*
for($i = 1;$i <= $num_boletos;$i++){

    echo "<br><br><br><br><br>";
    
    echo "<div align = 'center'><font color = '000000'>";
echo "<table border = “1” style = “border-collapse:separate;” background = './blanco.jpg' cellpadding = 30px cellspacing = '0' >
            <thead>
            <tr>
                <th colspan = '3'><h1>Boleto para ir a ver a ".$artista." desde el ".$lugar."</h1></th>
                </tr>
                </thead>
            <tbody>
            <tr>";
            //ARTISTAS
            if($artista == "5 Seconds Of Summer"){
                echo "<td><div align ='center'><img src = './5sos.jpg' height = '300px'></div></td>";
            }else if($artista == "Artic Monkeys"){
                echo "<td><div align ='center'><img src = './artic_monkeys.jpg' height = '300px'></div></td>";
            }else if($artista == "Coldplay"){
                
                echo "<td><div align ='center'><img src = './coldpaly.jpg' height = '300px'></div></td>";
            }else if($artista == "Imagine Dragons"){
                echo "<td><div align ='center'><img src = './imagine_dragons.jpg' height = '300px'></div></td>";
            }else if($artista == "Taylor Swift"){
                echo "<td><div align ='center'><img src = './taylor.jpg' height = '300px'></div></td>";
            }else if($artista == "Olivia Rodrigo"){
                echo "<td><div align ='center'><img src = './olivia.jpg' height = '300px'></div></td>";
            }else if($artista == "Conan Gray"){
                echo "<td><div align ='center'><img src = './conan.jpg' height = '300px'></div></td>";
            }else if($artista == "Micheal Jackson"){
                echo "<td><div align ='center'><img src = './micheal.jpg' height = '300px'></div></td>";
            }
            //LUGARES
            if($lugar == "Auditorio Nacional"){
                echo "<td><div align ='center'><br><img src = './auditorio_nacional.jpg' height = '300px'></div></td>";
            }else if($lugar == "Deportivo EMP"){
                echo "<td><div align ='center'><br><img src = './deportivo_emp.jpg' height = '300px'></div></td>";
            }else if($lugar == "Arena Ciudad de Mexico"){
                echo "<td><div align ='center'><br><img src = './arena.jpg' height = '300px'></div></td>";
            }else if($lugar == "Foro Sol"){
                echo "<td><div align ='center'><br><img src = './foro_sol.jpg' height = '300px'></div></td>";
            }else if($lugar == "Pepsi Center WTC"){
                echo "<td><div align ='center'><br><img src = './pepsi_center_wtc.jpg' height = '300px'></div></td>";
            }
            //EXTRAS
            if( $estacionamiento == 1 || $comida  == 1|| $souvenir == 1){
               echo " <td><div align = 'center'><h3>EXTRAS:</h3>
                <br><br>
                <ul type = 'disk'>";
                    if($comida == 1){
                        echo "<li><strong>Comida Extra</strong></li>";
                    }
                    if($estacionamiento == 1){
                        echo "<li><strong>Estacionamiento Extra</strong></li>";
                    }
                    if($souvenir == 1){
                        echo  "<li><strong>Souvenir Extra</strong></li>";
                    }
             echo"   </ul>
                </div>
                </td>";
            }else{

                echo "  <td><div align = 'center'><h2>NO SE SELECCIONARON<br> EXTRAS</h2></div></td>";


            }
        echo "</tr>

            <tr>
            <td><h2><div align = 'center'>".$nombre." ".$apellido."</div><h2></td>
            <td><h2><div align = 'center'> Zona: ".$zona."</div></h2></td>
            <td><h2><div align = 'center'>".$fecha."</div><h2></td>
            
                </tr>
        ";

     echo "           </tbody>
            </table>
            </font>
            </div>
    ";


}

//*/

 }


?>
    
</body>
</html>