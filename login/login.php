<?php
include_once '../database/database.php';

class Login {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }

    public function userLogin($username, $password, $role) {
        switch ($role) {
            case 'admin':
                $table = 'admin';
                break;
            case 'instructeur':
                $table = 'instructeurs';
                break;
            case 'leerling':
                $table = 'leerlingen';
                break;
            default:
                return false;
        }

        // Query naar de juiste tabel
        $stmt = $this->dbh->execute("SELECT * FROM $table WHERE email = ?", [$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['wachtwoord'])) {
            // Sessie en cookies instellen
            setcookie('gebruikersnaam', $username, time() + (86400 * 30), "/");
            $_SESSION['gebruikersnaam'] = $username;
            $_SESSION['role'] = $role; // Bewaar de rol in de sessie
            return true;
        } else {
            return false;
        }
    }
}