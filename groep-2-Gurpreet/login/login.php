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

        $stmt = $this->dbh->execute("SELECT * FROM $table WHERE email = ?", [$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['wachtwoord'])) {
            setcookie('gebruikersnaam', $username, time() + (86400 * 30), "/");
            $_SESSION['gebruikersnaam'] = $username;
            $_SESSION['role'] = $role; 
            return true;
        } else {
            return false;
        }
    }
}