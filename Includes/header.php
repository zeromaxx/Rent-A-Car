<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
$title = ucwords($title);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/our-cars.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title>Car Rental <?= $title ?></title>
</head>

<nav class="navbar">

    <div class="logo-brand"><a href="index.php"></a>
        <span class="nav-text"><a href="index.php">GcCarRental</a></span>
        <i class="toggle fa-solid fa-bars"></i>
    </div>
    <div class="navbar-links-container">
        <ul class="links">
            <li><a href="our_cars.php">Our Cars</a></li>
            <li><a href="rent_cost.php">Rental Cost</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<body>