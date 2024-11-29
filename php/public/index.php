<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/main.css">
    <title>Dr Deletre Nicolas</title>
</head>
<body>
<?php
    // Inclusion du fichier header.php
    include __DIR__ . '/views/header.php';

    // Page d'accueil
    if (!isset($_GET["page"]) || $_GET["page"] == "home") {
        include __DIR__ . '/views/home.php';
    }

    // Page "Le cabinet"
    if (isset($_GET["page"]) && $_GET["page"] == "medical-office") {
        include __DIR__ . '/views/medical-office.php';
    }

    // Page "La chute de cheveux"
    if (isset($_GET["page"]) && $_GET["page"] == "alopecia") {
        include __DIR__ . '/views/alopecia.php';
    }

    // Page "Esthétique du visage et du corps"
    if (isset($_GET["page"]) && $_GET["page"] == "aesthetics") {
        include __DIR__ . '/views/aesthetics.php';
    }

    // Page "Les traitements"
    if (isset($_GET["page"]) && $_GET["page"] == "treatments") {
        include __DIR__ . '/views/treatments.php';
    }

    // Page "Tarifs"
    if (isset($_GET["page"]) && $_GET["page"] == "rates") {
        include __DIR__ . '/views/rates.php';
    }

    // Page "Actualités"
    if (isset($_GET["page"]) && $_GET["page"] == "news") {
        include __DIR__ . '/views/news.php';
    }

    // Page "Contact"
    if (isset($_GET["page"]) && $_GET["page"] == "contact") {
        include __DIR__ . '/views/contact.php';
    }
    // Page "Mention Légales"
    if (isset($_GET["page"]) && $_GET["page"] == "cgu") {
        include __DIR__ . '/views/cgu.php';
    }

    // Inclusion du fichier footer.php
    include __DIR__ . '/views/footer.php';
?>
<script src="../scripts/menuBurger.js"></script>
</body>
</html>
