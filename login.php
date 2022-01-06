<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon-32x32.png">
    <link href="./assets/css/app.css" rel="stylesheet">
    <title>Moje ui42</title>
</head>

<body>
    <div class="login-box">
        <section class="image">
            <img src="assets/images/login.svg" alt="login image">
            <h1>Moje ui42 ti pomôže zorientovať sa v procesoch
                a dokumentoch, poskytne kontakty či umožní
                zapísať a prezrieť si odpracované hodiny.</h1>
        </section>
        <section class="form">
            <h1>Prihlás sa do moje ui42</h1>
            <p>Ešte nemáš účet? <a class="underline" href="signup.php">Zaregistruj sa</a></p>
            <button class="google"><img src="assets/images/google.svg" alt="google"></button>
            <p class="alert"><?= $error ?></p>
            <form action="login-action.php" method="post">
                <label for="mail">Firemný mail</label><br>
                <input type="email" id="mail" name="mail" required minlength="4" maxlength="25"><br>
                <label for="password">Heslo</label><br>
                <input type="password" id="password" name="password" required minlength="4" maxlength="20"><br>
                <button type="submit">Prihlásiť sa</button>
            </form>
        </section>
    </div>
    <footer class="bottom">
        <p class="copyright">Copyright © 1999-2021 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>