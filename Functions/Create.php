<?php
    if (!isset($_POST['hidden'])) {
        exit();
    }
    include '../DataBase/ConDB.php';

    $NameCreate = $_POST['txtName'];
    $LastNameCreate = $_POST['txtLastName'];
    $IdenCreate = $_POST['txtIden'];
    $EmailCreate = $_POST['txtEmail'];
    $PhoneCreate = $_POST['txtPhone'];

    $Request = $DB->query("SELECT * FROM registro;");
    $data = $Request->fetchAll(PDO::FETCH_OBJ);
    $cont = 0;
    if ($NameCreate == '' || $LastNameCreate == '' || $IdenCreate == '' || $EmailCreate == '' || $PhoneCreate == '') {
        echo '<script>alert("Los datos no pueden ser nulos"); window.location.href="../Views/Create.html"</script>';
    }
    else{
    foreach ($data as $dato) {

        if ($dato->Cedula == $IdenCreate) {

            $cont += 1;
            echo '<script>alert("Cedula registrada anteriormente"); window.location.href="../Inicio.php"</script>';
            
            //exit();
         }
    }

    

    if ($cont == 0) {

        $Request = $DB->prepare("INSERT INTO registro (Nombre, Apellido, Cedula, Correo, Celular) VALUES (?,?,?,?,?)");
        $Create = $Request->execute([$NameCreate, $LastNameCreate, $IdenCreate, $EmailCreate, $PhoneCreate]);
    
        if ($Create === TRUE) {
            header('Location: ../Inicio.php');
        } 
    }
    }
?>