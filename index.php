<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login System</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">


    <!-- Scripts -->
    <script src="main.js" defer></script>

</head>
<body class="bg-indigo-darker font-sans">
    <?php
        if($_SESSION['user'] > 0){
            include "partials/navbar.php";
        }
    ?>      

    <div class="container mx-auto">
        <?php
            if(!$_SESSION['user'] == 1){
                include 'partials/login_section.php';
            }
        ?>
    </div>
          
</body>
</html>