<?php
    include '../DataBase/ConDB.php';

        $IdDelete = $_GET['id'];

        $Request = $DB->prepare("DELETE FROM registro WHERE ID = ?");
        $Update = $Request->execute([$IdDelete]);

        if ($Update === TRUE) {

            header('Location: ../Inicio.php');
        }
?>