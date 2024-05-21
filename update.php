<?php
require_once "menu-class.php";
require_once "db-connection.php";
$menu = new Menu($conn);
$id = $_GET['id'];
$row = $menu->getById($id);  

if (isset($_POST['update'])) {
    $nazov = $_POST['nazov'];
    $popis = $_POST['popis'];
    $cena = $_POST['cena'];
    $obrazok = $_FILES['obrazok']['name'];
    $upload = 'assets/img/' . $obrazok;


    if (move_uploaded_file($_FILES['obrazok']['tmp_name'], $upload)) {
        $menu = new Menu($conn);
        $menu->update($id, $obrazok, $nazov, $popis, $cena);
        header('Location: templates/menu.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/create.css">
    <title>Update</title>
</head>
<body>
    <div class="container bg-white p-4 mt-4">
        <h1>Update</h1>
        
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <div class="form-group">
                <label>Názov</label>
                <input type="text" class="form-control" name="nazov" value="<?php echo $row['nazov']; ?>" required>
            </div>

            <div class="form-group">
                <label>Popis</label>
                <textarea class="form-control" name="popis" required><?php echo $row['popis']; ?></textarea>
            </div>

            <div class="form-group">
                <label>Cena</label>
                <input type="text" class="form-control" name="cena" value="<?php echo $row['cena']; ?>" required>
            </div>

            <div class="form-group">
                <label>Obrázok</label>
                <img src="<?php echo str_replace('../', '', $row['obrazok']); ?>" alt="Current Image" style="width: 100px; height: auto;" required>
                <input type="file" class="form-control" name="obrazok">
            </div>
            <button class ="update" type="submit" name="update">Update</button>
            <button class="cancel"><a href="templates/menu.php">Cancel</a></button>
            
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
