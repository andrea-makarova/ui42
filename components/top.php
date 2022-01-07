<?php
session_start();
if(!isset($_SESSION['id'])){
  header('Location: login.php');
}
?>

<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon-32x32.png">
        <link href="./assets/css/app.css" rel="stylesheet">
        <title>Moje ui42</title>
    </head>

<header class="nav-header">
    <section class="navigation">
    <a href="tasks.php"><img class="logo" src="assets/images/logo.svg" alt="ui42 logo"></a>
    <div onclick="toggleTopNav()" class="menu">
    <h2>Moje ui42</h2>
    <i class="top-icon fa fa-2x icon--arrow"></i>
</div>
    <input type="text" placeholder="Vyhľadať">
</section>
<section class="profile">
    <div class="user">
        <i class="top-icon-big fa fa-2x icon--user"></i>
        <p class="white-text"><?php echo $name ?></h3>
        <p>ui42</p>
    </div>
    <div class="log-out">
        <a href="logout.php"> 
        <i class="top-icon-big fa fa-2x icon--power"></i>
        <p class="white-text">Odhlásiť sa</h3>
</a>
    </div>
</section>
</header>