<?php
require "includes/config.php";
require "includes/function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuliner</title>
</head>

<body>
    <header>
        <h1 style="text-align: center;">Daftar Kuliner Tradisional</h1>
        <hr>
    </header>

    <div style="text-align: center;">
        <?php require "includes/navbar.php"; ?>
        <hr>
    </div>

    <div style="text-align: center;">
        <?php require "includes/konten.php"; ?>
    </div>

    <footer style="margin-botom: 3em; text-align: center;">
        <hr>
        Pemrograman Web 1 @ <?= date("Y") ?>
    </footer>
</body>

</html>
