<?php
session_start();

if (!isset($_SESSION['gebruikersnaam']) && !isset($_COOKIE['gebruikersnaam'])) {
    header("Location: ../login/userLogin.php");
    exit;
}

$root_path = $_SERVER['DOCUMENT_ROOT'] . "/groep-2-Gurpreet/";

include_once $root_path . 'database/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="page-container"> 
        <?php include_once $root_path . 'header/header.php'; ?>
        
        <div class="home-container">
            <h1>Admin dashboard</h1>
        </div>
        
        <?php include_once $root_path . 'footer/footer.php'; ?>
    </div>
</body>

</html>
