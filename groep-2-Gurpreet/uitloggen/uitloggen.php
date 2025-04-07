<?php
session_start();

if (isset($_COOKIE['gebruikersnaam'])) {
    setcookie('gebruikersnaam', '', time() - 3600, '/');
}

session_unset();
session_destroy();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

header("Location: ../index.php");
exit;