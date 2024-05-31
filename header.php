<!DOCTYPE html>
<html lang="en">

<head>
    <title>3D TISK</title>
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="icon" type="image/x-icon" href="public/img/favi.jpg" />
</head>

<body>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header>
    <div class="navbar">
        <div class="icon">
            <a class="logoHref" href="index.php">
                <h2 class="logo">3D TISK</h2>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a <?php if($current_page == 'index.php') echo 'class="active"'; ?> href="index.php">HOME</a></li>
                <li><a <?php if($current_page == 'order.php') echo 'class="active"'; ?> href="order.php">ORDER</a></li>
                <li><a <?php if($current_page == 'aboutPrinter.php') echo 'class="active"'; ?> href="aboutPrinter.php">ABOUT PRINTER</a></li>
                <li><a <?php if($current_page == 'photos.php') echo 'class="active"'; ?> href="photos.php">PHOTOS</a></li>
                <li><a <?php if($current_page == 'contact.php') echo 'class="active"'; ?> href="contact.php">CONTACT</a></li>
                <li><a <?php if($current_page == 'login.php') echo 'class="active"'; ?> href="login.php">LOGIN</a></li>
                <li><a <?php if($current_page == 'registration.php') echo 'class="active"'; ?> href="registration.php"><p class="small">REGISTER</p></a></li>
            </ul>
        </div>
    </div>
</header>

