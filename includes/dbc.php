<?php
    $db_host ="localhost";
    $db_name ="loginsystem";
    $db_user ="root";
    $db_pass = "";

    $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name;

    try {
        $conn = new PDO($dsn, $db_user, $db_pass);

        if($conn){
            echo "connection to db";
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }