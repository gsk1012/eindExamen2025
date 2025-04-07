<?php
$root_url = "http://" . $_SERVER['HTTP_HOST'] . "/ex-2025/groep-2-Gurpreet/groep-2-Gurpreet/";
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous" defer></script>
    
    <link rel="stylesheet" href="<?php echo $root_url; ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo $root_url; ?>css/header.css">
    
    <title>Document</title>
</head>
<body>
    <nav>
        <h1 class="logo"><a href="<?php echo $root_url; ?>index.php">Rijschool Casus</a></h1>
        <ul>
            <li><a href="<?php echo $root_url; ?>index.php">Home</a></li>
            <li><a href="<?php echo $root_url; ?>contact.php">Contact</a></li>
            <li><a href="<?php echo $root_url; ?>login/userLogin.php">Inloggen</a></li>
        </ul>
    </nav>
</body>
</html>
