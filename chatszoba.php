<?php 
session_start();
if (!isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat szoba</title>
    <link rel="icon" href="img/02Naruto.jpg" />
    <link rel="stylesheet" href="style.css"/>
</head>
<body id="fooldalbody">
    <header id="fooldalfejlec">
 <?php include "fejlec.html"; ?>
    </header>
   

    <?php
    include "belepes.php";
    include "komment.php";
    
    ?>
</body>
</html>