<?php
require_once 'db-connection.php';
require_once 'login-class.php';
$login = new Login($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($login->createLogin($username, $password)) {
            header('Location: login.php');
            exit;
        } else {
            $message = 'Regstrácia nebola úspešná';
        }
    } else {
        $message = 'Prosím, zadajte meno a heslo.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/register.css">
    <title>Registrácia</title>
</head>
<body>
    <div class="container bg-white p-4 mt-4">
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Meno:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Heslo:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button class="update" type="submit">Registrovať</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>