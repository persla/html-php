<?php
    $db = connectToDatabase($dsn2);
    $sql = "SELECT * FROM article;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res1 = $stmt->fetchAll();

    ?>
 <!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <link rel="shortcut icon" href="img/favicon.ico"/>
</head>

<body>
    <header class="site-header">
        <img class="image2"src="img\250\tva-valvig-stenbro-over-nattrabyan.jpg" alt="Skylt gamla landsvägen" />

        <span class="site-title"><?= $res1[0]["title"]; ?></span>
        <span class="site-slogan"><?= $res1[0]["TEXT"]; ?></span>


    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="index.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "objectspage.php" ? "selected" : ""; ?>" href="objectspage.php">Objekten</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "articelspage.php" ? "selected" : ""; ?>" href="articelspage.php">Artiklar</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "mapshome.php" ? "selected" : ""; ?>" href="mapshome.php">Kartor</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "search.php" ? "selected" : ""; ?>" href="search.php">Sök</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "contact.php" ? "selected" : ""; ?>" href="contact.php">Hitta hit</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "historypage.php" ? "selected" : ""; ?>" href="historypage.php">Väghistoria</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "aboutpage.php" ? "selected" : ""; ?>" href="aboutpage.php">Om</a>



    </nav>

<main>
