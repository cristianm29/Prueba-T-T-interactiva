<?php
    include '../DataBase/ConDB.php';

        $IdU = $_POST['id'];
        $NameUpdate = $_POST['txtUpName'];
        $LastNameUpdate = $_POST['txtUpLastName'];
        $IdenUpdate = $_POST['txtUpIden'];
        $EmailUpdate = $_POST['txtUpEmail'];
        $PhoneUpdate = $_POST['txtUpPhone'];

        $Request = $DB->query("SELECT * FROM registro;");
        $data = $Request->fetchAll(PDO::FETCH_OBJ);
        $cont = 0;
        foreach ($data as $dato) {

        if ($dato->Cedula == $IdenUpdate && $dato->ID != $IdU) {

            $cont += 1;
            echo '<script>alert("Cedula registrada anteriormente"); window.location.href="../Inicio.php"</script>';
            
            //exit();
         }
    }

    if ($cont == 0) {
        $Request = $DB->prepare("UPDATE registro SET Nombre = ?, Apellido = ?, Cedula = ?, Correo = ?, Celular = ? WHERE ID = ?");
        $Update = $Request->execute([$NameUpdate, $LastNameUpdate, $IdenUpdate, $EmailUpdate, $PhoneUpdate, $IdU]);

        if ($Update === TRUE) {

            header('Location: ../Inicio.php');
        }
    }

        
?>