<?php
require 'db-connection.php'; 
require 'login-class.php'; 

$login = new Login($conn);
$login->logout();

?>
