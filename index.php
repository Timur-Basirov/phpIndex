<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP tööd Timur Baširov(TARpv24)</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php include ('header.php'); ?>
<div class="flex-container">
    <?php include ('nav.php'); ?>
    <div>
        <?php
        if(isset($_GET["link"])){
            include ('content/'.$_GET["link"]);
        } else {
            include ('content/Avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/pilt.png" alt="pilt vabal valikul">
        <h1>Kuupäev ja kellaeg(JavaScript)</h1>
        <button onclick="naita()">Praegu on:</button>
        <p id="vastus1"></p>
        <p id="vastus2"></p>
    </div>
</div>
<?php include ('footer.php'); ?>
<script src="js/musicJs.js"></script>
<script src="js/nupp.js"></script>
</body>
</html>