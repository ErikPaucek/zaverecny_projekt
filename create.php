<?php
require_once "menu-class.php";
require_once "db-connection.php";

if (isset($_POST['submit'])) {
    $nazov = $_POST['nazov'];
    $popis = $_POST['popis'];
    $cena = $_POST['cena'];
    $typ = $_POST['typ'];
    $obrazok = $_FILES['obrazok']['name'];
    $upload = 'assets/img/' . $obrazok;


if (move_uploaded_file($_FILES['obrazok']['tmp_name'], $upload)) {
    $menu = new Menu($conn);
    $menu->create($upload, $nazov, $popis, $cena, $typ);
        header('Location: templates/menu.php');
} else {
    echo "Chyba pri nahrávaní obrázka.";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vytvorenie položky menu</title>
    <link rel="stylesheet" href="assets/css/create.css">
</head>
<body>
<div>
    <h1>Pridať nový burger</h1>
    <form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nazov">Názov</label>
        <input type="text" name="nazov" required>
    </div>

    <div class="form-group">
        <label for="popis">Popis</label>
        <textarea name="popis" required></textarea>
    </div>

    <div class="form-group">
        <label for="cena">Cena</label>
        <input type="number" name="cena" min="0" step="0.01" required>
    </div>

    <div class="form-group">
        <label for="obrazok">Obrázok</label>
        <input type="file" name="obrazok" accept="image/*" required>
    </div>

    <div class="form-group">
        <label for="typ">Typ</label>
        <select name="typ" required>
            <option value="Burger">Burgre</option>
            <option value="Prilohy">Prílohy</option>
            <option value="Napoje">Nápoje</option>
        </select>
    </div>

    <button class ="create" type="submit" name="submit">Vytvoriť</button>
</form>
</div>
</body>
</html>
