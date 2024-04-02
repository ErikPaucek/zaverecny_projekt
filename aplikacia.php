<?php
include_once "header_footer/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="McDonald fastfood info">
    <meta name="keywords" content="jedlo, mcdonald, fastfood, informacie">
    <meta name="author" content="Erik Pauček">
    <title>Aplikácia</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--MENU-->
    
    
    <!--main-(jadro)-->
    <main>
        <!--info o apke - sekcia 1-->
        <section class="info">
            <h1>Aplikácia</h1>
            <p>Naša aplikácia vám umožňuje objednať si jedlo z McDonald's priamo z pohodlia vášho domova. Môžete si prezerať naše menu, sledovať svoje objednávky a dokonca získavať exkluzívne ponuky!</p>
        </section>

        <!--download appky - sekcia 2-->
        <section class="download">
            <div class="linky">
                <p class="lnk"><a href="https://play.google.com/store/apps/details?id=com.mcdonalds.mobileapp&hl=sk">Stiahnuť z Google Play</a></p>
                <p class="lnk"><a href="https://apps.apple.com/sk/app/mcdonalds-sk/id1217507712?l=sk">Stiahnuť z App Store</a></p>
            </div>
            <div class="obr"><img src="img/app.avif" alt=""></div>
        </section>
       
        <!--kontaktovanie - sekcia 3-->
        <div class="nadpis"><h2>Kontaktujte nás</h2></div>
        <section class="kon">
            <p>Ak máte problémy s našou aplikáciou alebo máte otázky, neváhajte nás kontaktovať na <a href="mailto:info@mcdonalds.sk">info@mcdonalds.sk</a>.</p>
        </section>
        
        <!--otázky k appke - sekcia 4-->
        <section class="qst">
            <h2>Často kladené otázky</h2>
                <p><strong>Ako môžem sledovať svoju objednávku?</strong><br>Po odoslaní objednávky môžete sledovať jej stav v sekcii "Moje objednávky".</p><br>
                <p><strong>Ako môžem zmeniť svoju objednávku?</strong><br>Ak chcete zmeniť svoju objednávku, môžete to urobiť v sekcii "Moje objednávky" predtým, ako bude objednávka potvrdená.</p><br>
                <p><strong>Ako môžem získať exkluzívne ponuky?</strong><br>Exkluzívne ponuky a zľavy môžete získať tým, že sa prihlásite do našej aplikácie a povolíte upozornenia.</p><br>
        </section>
    </main>

    <!-- footer-->
<?php
include_once "header_footer/footer.php";
?>
    <script src="js/domov.js"></script>
</body>
</html>