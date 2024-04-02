<?php
include_once "header_footer/header.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="McDonald fastfood kontakt">
        <meta name="keywords" content="jedlo, mcdonald, fastfood, kontakt">
        <meta name="author" content="Erik Pauček">
        <title>Kontaktný formulár</title>
        <link rel="stylesheet" href="css/style4.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--MENU-->
 
<!-- main - formulár-->
    <main>  
     <section class="formular">     
        <form id="fo"action="thanks.html" method="get" target="_blank">
            <input type="text" id="name" name="name" required placeholder="Meno"><br>
            <input type="text" id="surname" name="surname" required placeholder="Priezvisko"><br>
            <input type="email" id="email" name="email" required placeholder="E-mail"><br>
            <textarea id="text" name="text" placeholder="Poznámka"></textarea><br>
            <label for="check">Súhlasím so spracovaním osobných údajov</label>
            <input type="checkbox" id="check" name="check" required><br>
            <input type="submit" value="Odoslať" onclick="odoslat()">
        </form>
     </section>
    </main>

     <!--zaver - footer-->
<?php
include_once "header_footer/footer.php";
?>
    <script src="js/domov.js"></script>
    <script src="js/form.js"></script>
    </body>
    </html>