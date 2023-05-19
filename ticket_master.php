<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Master Remasterizado</title>
    <link rel = "icon" href = "https://tec.mx/sites/default/files/repositorio/Venues/Eventos/Conciertos/concierto-muse-1-tec-de-monterrey.jpg" type = "image/jpg">
</head>

<body background = "./fondo.jpg" style = "color:white">
    
    <h1 align = "center">TICKET MASTER GENIAL</h1>
    <p align = "center">
        Esta version de ticket master remasterizada si funciona(o no) y nosotros nos comprometemos a robarte tu dinero, ejem digo, a darte tus boletos
        <br><hr><br>
        <div align =  "center">
        Pero primero el tipo de boleto que desea:
        </div>
    </p>
    <br>
    <form action = "./boletos.php" method = "post" target = "_self" accept-charset = "UTF-8" name = "boletos">
        <fieldset>
            <legend><i>Datos de tus boletos</i></legend>
            <br>
            <label>
                Nombre: <input type = "text" placeholder = "Jorge" required name = "nombre">
            </label>
            <br><br>
            <label>
                Apellido: <input type = "text" placeholder = "Garcia" required name = "apellido">
            </label>
            <br><br>
            <label>
                Fecha del evento:  <input type = "date" required name = "fecha">
            </label>
            <br><br>
            <label>
                Grupo o Artista: <select  name = "artistas" requied>
                                        <option value = "none">No seleccionado</option>
                                        <optgroup label = "Grupos">
                                        <option value = "5SOS">5 Seconds Of Summer</option>
                                            <option value = "Artic Monkeys">Artic Monkeys</option>
                                            <option value = "Coldplay">Coldplay</option>
                                            <option value = "Imagine Dragons">Imagine Dragons</option>
                                        </optgroup>
                                        <optgroup label = "Artistas">
                                            <option value = "Taylor Swift">Taylor Swift</option>
                                            <option value = "Olivia Rodrigo">Olivia Rodrigo</option>
                                            <option value = "Conan Gray">Conan Gray</option>
                                            <option value = "Micheal Jackson">Micheal Jackson(concierto desde el cielo)</option>
                                        </optgroup>

                                </select>
            </label>
            <br><br>
            Zona: <select name = "zona" required>
                <option value = "none">No seleccionado</option>
                                        <optgroup label = "Zonas">
                                            <option value = "muy_cerca">Rompeoidos</option>
                                            <option value = "cerca">CasiRompeoidos</option>
                                            <option value = "medio">Disfruta</option>
                                            <option value = "lejos">CasiNoseescucha</option>
                                            <option value = "muy_lejos">Noseescucha</option>      
                                        </optgroup>
                                </select>
                                <br><br>
            <label>
                Número de Boletos: 
                <input type = "number" required min = 1 max = 15 name = "num">
            </label>
<br><br>
            <label>
                Lugar: <select required name = "lugar">
                        <option value = "none">No seleccionado</option>
                        <optgroup label = "Lugar">
                        <option value = "auditorio_nacional">Auditorio Nacional</option>
                        <option value = "deportivo_EMP">Deportivo EMP</option>
                        <option value = "arena">Arena Ciudad de México</option>
                        <option value = "foro_sol">Foro Sol</option>
                        <option value = "pepsi_center">Pepsi Center WTC</option>
                        </optgroup>
                    </select>
                </label>
            <br><br>
            <label>

                <strong>EXTRAS:</strong>
                <br>
                Comida: <input type = "checkbox" name = "comida_extra">
                <br>
                Estacionamiento: <input type = "checkbox" name = "estacionamiento_extra">
                <br>
                Souvenir: <input type = "checkbox" name = "souvenir_extra">
                </label>

        </fieldset>
<br><br>
        <input type = "submit">
       <input type = "reset" >
        
    </form>
    

</body>
</html>