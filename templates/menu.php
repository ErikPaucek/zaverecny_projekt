<?php
include_once "../header_footer/header.php";
require_once "../menu-class.php";
require_once "../db-connection.php";    
session_start();
if (!isset($_SESSION["username"])){
    header("Location: ../login.php");
}       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="McDonald fastfood obrazky">
    <meta name="keywords" content="jedlo, mcdonald, fastfood, obrazky">
    <meta name="author" content="Erik Pauček">
    <title>Galéria</title>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--MENU-->
    

    <!--main-(jadro)-->
    <main>
    <a href="../create.php" class="plus-button-link">+</a>
    
        <!--Prvá časť menučka - section-->
        <h3 class="nadpis">Burgre</h3>
        <section class="mc1">
        <?php
            $burgre = new Menu($conn);
            $burgre->read('Burger', 'mc1');
            ?>
           
        </section>

        <!--Druhá časť menučka - section-->
        <h3 class="nadpis">Prílohy</h3>
        <section class="mc2">
        <?php
            $prilohy = new Menu($conn);
            $prilohy->read('Prilohy', 'mc2');
            ?>
        </section>

        <!--Tretia časť menučka - section-->

        <h3 class="nadpis">Nápoje</h3>
        <section class="mc3">
           <?php
            $napoj = new Menu($conn);
            $napoj->read('Napoje', 'mc3');
            ?>

        </section>
    </main>


    <!--zaver - footer-->
<?php
include_once "../header_footer/footer.php";
?>
    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/domov.js"></script>
</body>
</html>