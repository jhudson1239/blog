<?php
    require "includes/dbc.php";

    $query = " SELECT * FROM users";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    foreach ($results as $row){
        echo "<br>";
        echo $row->name;
    }
?>