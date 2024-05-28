<?php
require_once 'db-connection.php';
require_once 'login-class.php';
session_start();
if (!isset($_SESSION["username"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uživatelia</title>
</head>
<body>
    <?php
        $login = new Login($conn);
        $users = $login->getUsers();
        foreach($users as $user) {
            echo 'Meno: ' . $user['username'] . '<br>';
            echo 'Heslo: ' . $user['password'] . '<br>';
            echo '<br>';
            echo '<br>';
}
?>
</body>
</html>