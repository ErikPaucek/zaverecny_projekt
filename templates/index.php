<?php
include_once "../header_footer/header.php";
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
    <meta name="description" content="McDonald fastfood">
    <meta name="keywords" content="jedlo, mcdonald, fastfood">
    <meta name="author" content="Erik Pauček">
    <title>Domov</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <!--MENU-->
    

    <!--main-(jadro)-->
    <main>
    <!--sekcia 1-->
        <section class="banner" >
            <h1>McDonald's</h1>
            <p>Vitajte na oficiálnej stránke McDonald's! Sme hrdí, že vám môžeme ponúknuť širokú škálu chutných jedál, ktoré sú pripravené s láskou a starostlivosťou. Naša ponuka zahŕňa všetko od našich slávnych Big Macov, cez chutné McFlurry, až po zdravé šaláty a občerstvenie. </p>
        </section>


    <!--sekcia 2-->
        <section class="news">
            <h2>Novinky</h2>
            <table class="tab">
                    <tr>
                        <td>Philly Cheese Stack</td>
                        <td>Nový Philly Cheese Stack je plný syra</td>
                        <td>€4.99</td>
                    </tr>
                    <tr>
                        <td>McCrispy BBQ Smokehouse</td>
                        <td>McCrispy BBQ Smokehouse ponúka kuracie mäso pokryté dymovou BBQ omáčkou</td>
                        <td>€5.49</td>
                    </tr>
                    <tr>
                        <td>Chicken McNuggets</td>
                        <td>Nové Chicken McNuggets sú dostupné v balení deviatich kusov</td>
                        <td>€3.99</td>
                    </tr>
                    <tr>
                        <td>McCrispy Deluxe</td>
                        <td>McCrispy Deluxe je nový prírastok do ponuky</td>
                        <td>€5.99</td>
                    </tr>
                    <tr>
                        <td>BBQ Quarter Pounder Cheese</td>
                        <td>BBQ Quarter Pounder Cheese je nový burger s BBQ omáčkou</td>
                        <td>€4.49</td>
                    </tr>
                    <tr>
                        <td>Cheesy Garlic Bites</td>
                        <td>Cheesy Garlic Bites sú nové syrové snacky s cesnakom</td>
                        <td>€2.99</td>
                    </tr>
                    <tr>
                        <td>Galaxy Salted Caramel McFlurry</td>
                        <td>Galaxy Salted Caramel McFlurry je nový druh McFlurry s karamelom</td>
                        <td>€2.49</td>
                    </tr>
            </table>
        </section>

    <!--sekcia 3-->
        <section class="delivery">
           <h2>Donáška</h2>
            <ul class="zoznamDe">
                <li>Otváracie hodiny: Pondelok - Nedeľa, 10:00 - 22:00</li>
                <li>Platba terminálom: Áno</li>
                <li>Online platba: Áno</li>
            </ul>
        </section>
    </main>

    <!--zaver - footer-->
<?php
include_once "../header_footer/footer.php";
?>
    <script src="../assets/js/domov.js"></script>
</body>
</html>