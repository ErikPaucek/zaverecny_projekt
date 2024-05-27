<?php
class Login {
private $db;

public function __construct($db) {
        $this->db = $db;
}

public function createLogin($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        return $stmt->execute(); 
    }

public function logout() {     
    session_start();
    session_unset();
    session_destroy();   
    header("Location: login.php");
    exit;
}

public function verifyLogin($username, $password) {
    $sql = "SELECT password FROM user WHERE username = :username";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $isPasswordCorrect = password_verify($password, $result['password']);
        if (!$isPasswordCorrect) {
            echo 'Zlé heslo';
        }
        return $isPasswordCorrect;
    } else {
        echo 'Uzivatel neexistuje';
        return false;
    }
}

public function getUsers(){
    $sql = "SELECT * FROM user";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
?>