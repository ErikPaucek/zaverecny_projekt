<?php
require_once "menu-class.php";
require_once "db-connection.php";

$id = $_GET['id'];

$menu = new Menu($conn);
$menu->delete($id);

header('Location: templates/menu.php');
?>