<?php

    $Password =  '';
    $User = 'root';
    $NameDB = 'crud_t&t';

    try {
        
        $DB = new PDO(
            'mysql:host = localhost;
            dbname='.$NameDB,
            $User,
            $Password
        );
       // echo "Conexion realizada";

    } catch (Exception $e) {
        echo "Error";
    }

?>