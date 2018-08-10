<?php
    require "dbc.php";
    session_start();


    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);

    //Clean data
    $email_clean = htmlspecialchars(strip_tags($email));

    //Bind data
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_OBJ);

    if($password == $results->password){
        $array = [
            "name" => "$results->name",
            "email" => $results->email
        ];
        $_SESSION['user'] = $array;
    }
    header('Location:/login');
?>