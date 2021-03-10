<?php
    include '../DataBase/ConDB.php';
    $Id = $_GET['id'];

    $Request = $DB->prepare("SELECT * FROM registro WHERE ID = ?;");
    $Request->execute([$Id]);
    $Search = $Request->fetch(PDO::FETCH_OBJ);
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../Estilo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="../Pictures/Icon.ico" /> 
</head>

<body>
    <center>
        <nav class="navbar navbar-light" style="background-color: #900C3F;">
            <div class="container">
                <a href="../Inicio.php" class="navbar-brand" style="color: #ECEEF8;">PRUEBA T&T <img src="../Pictures/Icon.png" ></a>
            </div>
        </nav>
    <br>
    <h1>MODIFICAR REGISTRO</h1>
    <br>
    <div class="col-md-3">
    <form method="POST" action="Update.php">
    <table class="table table-bordered">
        
       <tr>
           <td><b>Nombre</b></td>
           <td><input type="text" name="txtUpName" value="<?php echo $Search->Nombre?>"></td>
       </tr>
       <tr>
           <td><b>Apellido</b></td>
           <td><input type="text" name="txtUpLastName" value="<?php echo $Search->Apellido?>"></td>
       </tr>
       <tr>
           <td><b>Cedula</b></td>
           <td><input type="number" name="txtUpIden" value="<?php echo $Search->Cedula?>"></td>
       </tr>
       <tr>
           <td><b>Correo</b></td>
           <td><input type="email" name="txtUpEmail" value="<?php echo $Search->Correo?>"></td>
       </tr>
       <tr>
           <td><b>Celular</b></td>
           <td><input type="number" name="txtUpPhone" value="<?php echo $Search->Celular?>"></td>
       </tr>
    </table>
        <input type="hidden" name="id" value="<?php echo $Search->ID?>">
        <br>
        <input class="B" type="submit" value="Modificar">
    </form>
    </div>
</body>
</html>