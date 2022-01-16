<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon/favicon-32x32.png">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    <!-- <link href="./assets/css/fonts.css" rel="stylesheet"> -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/buxus.css" rel="stylesheet">
    <link href="./assets/css/custom-styles.css" rel="stylesheet">
    <link href="./assets/css/dashboard.css" rel="stylesheet">
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
        <section class="image-user none">
            <img src="assets/images/sign-up.png" alt="login image">
            <h1>Moje ui42 ti pomôže zorientovať sa v procesoch
                a dokumentoch, poskytne kontakty či umožní
                zapísať a prezrieť si odpracované hodiny.</h1>
        </section>

        <form action="signup-action.php" method="post">
            <section class="form">
                <h1>Zaregistruj sa v moje ui42</h1>
                <p>Máš už účet? <a class="underline" href="login.php">Prihlás sa</a></p>
                <button class="google"><img src="assets/images/google.svg" alt="google"></button>
                <label for="name">Celé meno</label><br>
                <input type="text" id="name" name="name" required minlength="4" maxlength="30"><br>
                <label for="mail">Firemný mail</label><br>
                <input type="email" id="mail" name="mail" required minlength="4" maxlength="25"><br>
                <label for="password">Heslo</label><br>
                <input type="password" id="password" name="password" required minlength="4" maxlength="20"><br>
                <label for="passwordVerification">Over heslo</label><br>
                <input type="password" id="passwordVerification" name="passwordVerification" required minlength="4" maxlength="20"><br>
                <button type="button" onclick="toUser()" class="continue">Pokračovať</button>
            </section>
            <section class="form-user none">
                <h1>Povedz nám o sebe viac</h1>

                <label for="image">Nahraj svoju fotku</label><br>
                <section class="image-upload">
                    <input type="file" name="file">
                    <input name="submit" value="Upload">
                    <div>
                        <img src="assets/images/upload.svg" alt="upload icon">
                        <p>Nahraj alebo potiahni</p>
                    </div>

                </section>

                <label for="hobby">Aké máš záľuby?</label><br>
                <div class="btn-input">
                    <input type="text" id="hobby" name="hobby">
                    <button class="form-btn" type="submit">Pridať</button>
                </div>
                <button type="submit">Dokončiť registráciu</button>
            </section>
        </form>

    </div>
    <footer class="bottom">
        <p class="copyright">Copyright © 1997-2022 ui42. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>