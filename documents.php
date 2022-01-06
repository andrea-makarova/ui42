<?php

session_start();
$id = $_SESSION['id'];
$name = $_SESSION['full_name'];
$email = $_SESSION['email'];
$first_login = $_SESSION['first_login'];
require_once('components/top.php');
?>



<body class="fixed-nav buxus-components">
    <div id="wrapper">
        <nav class="navbar-default navbar-primary">
            <ul class="nav side-menu" id="top-menu">
                <li class="inactive">
                    <a href="tasks.php" title="Tasky" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--pin"></i>
                        <span class="nav-label">Tasky & Mzda</span>
                    </a>
                </li>
                <li class="inactive">
                    <a href="haydnova.php" title="Haydnova" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--home"></i>
                        <span class="nav-label">Haydnova</span>
                    </a>
                </li>
                <li class="inactive">
                    <a href="h&s.php" title="Hardware & Software" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--micro-sd-card"></i>
                        <span class="nav-label">Hardware & Software</span>
                    </a>
                </li>
                <li class="active">
                    <a href="documents.php" title="Postupy & Dokumenty" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--text-document"></i>
                        <span class="nav-label">Postupy & Dokumenty</span>
                    </a>
                </li>
                <li class="inactive">
                    <a href="teams.php" title="Tímy" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--users nav-icon--light"></i>
                        <span class="nav-label">Tímy</span>
                    </a>
                </li>
                <li class="inactive">
                    <a href="about.php" title="O ui42" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--share"></i>
                        <span class="nav-label">O ui42</span>
                    </a>
                </li>
                <li class="inactive">
                    <a href="contacts.php" title="Tasky" class="nav-link">
                        <i class="nav-icon fa fa-2x nav-icon--address-book"></i>
                        <span class="nav-label">Kontakty</span>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav side-menu" id="side-menu">
                    <li class="active">
                        <a href="documents.php" title="Zmluvy" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--contract"></i>
                            <span class="nav-label">Zmluvy</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="finance.php" title="Finančné dokumenty" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--cost"></i>
                            <span class="nav-label">Finančné dokumenty</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="absence.php" title="Nedostupnosť v práci" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--calendar-no"></i>
                            <span class="nav-label">Nedostupnosť v práci</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="pandemic.php" title="Fungovanie počas pandémie" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--otp"></i>
                            <span class="nav-label">Fungovanie počas pandémie</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="bozp.php" title="BOZP" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--attachment"></i>
                            <span class="nav-label">BOZP</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="links-documents.php" title="Užitočné linky" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--link"></i>
                            <span class="nav-label">Užitočné linky</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="graphics.php" title="Grafické súbory" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--vector-document"></i>
                            <span class="nav-label">Grafické súbory</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <div id="page-wrapper">
            <div class="wrapper wrapper-content">
                <div class="ibox row">
                    <div class="ibox-title col-xs-10">
                        <ul class="breadcrumbs">
                            <li><span>Zmluvy</span></li>
                        </ul>
                    </div>

                    <div class="ibox-content">
                        <div class="flex-margin">
                            <section class="box gray">
                                <div class="top-bar">
                                    <h1>Zamestnanec</h1>
                                    <a href="" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Čo všetko obnáša tvoja zmluva?</p>
                                <p>&#8226; Aké máš práva a povinnosti?</p>
                            </section>

                            <section class="box">
                                <div class="top-bar">
                                    <h1>Živnostník</h1>
                                    <a href="" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Kedy sa platia odvody? Koľko musíš zaplatiť?</p>
                                <p>&#8226; Čo všetko obnáša tvoja zmluva?</p>
                            </section>
                            <section class="box gray">
                                <div class="top-bar">
                                    <h1>Dohodár</h1>
                                    <a href="assets/images/ui42_ParkingMap.png" download target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Ako sa zdaňuje tvoj príjem? Máš nárok na dovolenku?</p>
                                <p>&#8226; Čo všetko obnáša tvoja zmluva?</p>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bottom">
        <p class="copyright">Copyright © 1999-2021 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>