<?php
include_once '../database/database.php';
include_once '../login/login.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['naam'];
    $password = $_POST['wachtwoord'];
    $role = $_POST['role'];

    $login = new Login($myDb);

    if ($login->userLogin($username, $password, $role)) {
        echo "<script>alert('Login succesvol!'); window.location.href='dashboard.php';</script>";
        exit();
    } else {
        $error = "Onjuiste gegevens!";
        echo "<script>alert('$error');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/log.css">
</head>
<body>
<?php include_once '../header/header.php'; ?>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post">
            <h2 style="color: white;">Login</h2>
            <input type="text" name="naam" placeholder="Email" required />
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required />

            <select name="role" class="role-select" required>
                <option value="#">Kies je rol</option>
                <option value="admin">Admin</option>
                <option value="instructeur">Instructeur</option>
                <option value="leerling">Leerling</option>
            </select><br>

            <button type="submit" class="btn" style="color: white;">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Sign in
            </button>

            <p class="message">Not registered? <a href="registeren.php">Create an account</a></p>

            <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
