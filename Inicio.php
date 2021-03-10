<?php

    include 'DataBase/ConDB.php';
    $Request = $DB->query("SELECT * FROM registro;");
    $data = $Request->fetchAll(PDO::FETCH_OBJ);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous"> 
    <link href="Estilo.css"
      rel="stylesheet" type="text/css">
      <link rel="shortcut icon" type="image/x-icon" href="Pictures/Icon.ico" />   
</head>
<body>
    <center>
    <nav class="navbar navbar-light" style="background-color: #900C3F;">
        <div class="container">
            <a href="Inicio.php" class= "navbar-brand" style="color: #ECEEF8;">PRUEBA T&T <img src="Pictures/Icon.png" ></a>
        </div>
    </nav>
<br>
<h1>REGISTRO DE INFORMACIÓN</h1>
<br>

<div class="col-md-8">
    <table class="table table-bordered">
        <tr>
           <!--  <td>ID</td> -->
            <td><b>NOMBRE</b></td>
            <td><b>APELLIDO</b></td>
            <td><b>CEDULA</b></td>
            <td><b>CORREO</b></td>
            <td><b>CELULAR</b></td>
        </tr>
        <?php
            foreach ($data as $dato) {
        
        ?>
        <tr>
         
            <td><?php echo $dato->Nombre?></td>
            <td><?php echo $dato->Apellido?></td>
            <td><?php echo $dato->Cedula?></td>
            <td><?php echo $dato->Correo?></td>
            <td><?php echo $dato->Celular?></td>
            <td><a href="Functions/UpdateView.php?id=<?php echo $dato->ID?>"><img src="Pictures/Update.png" ></a></td>
            <td><a href="Functions/Delete.php?id=<?php echo $dato->ID?>"><img src="Pictures/Delete.png" ></a></td>
        </tr>

        <?php
    }
    ?>
    </table>
    <br>
    <a href="Views/Create.html"><input class="B" type="button" value = "Crear"></a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" 
    crossorigin="anonymous"></script>
    </div>
</body>
</html>