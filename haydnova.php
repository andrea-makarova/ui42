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
                <li class="active">
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
                <li class="inactive">
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
                        <a href="haydnova.php" title="Haydnova" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--house"></i>
                            <span class="nav-label">Budova</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="internet.php" title="Internet" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--browser"></i>
                            <span class="nav-label">Internet</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="printers.php" title="Tlačiarne" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--printer"></i>
                            <span class="nav-label">Tlačiarne</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="lunch.php" title="Obedy" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--basket"></i>
                            <span class="nav-label">Obedy</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="post.php" title="Pošta" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--envelope"></i>
                            <span class="nav-label">Pošta</span>
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
                            <li><span>Budova</span></li>
                        </ul>
                    </div>

                    <div class="ibox-content">
                        <div class="flex-margin">
                            <section class="box gray">
                                <div class="top-bar">
                                    <h1>Použitie čipov</h1>
                                    <a href="https://drive.google.com/file/d/1Ysoi1ODsSd96OtSHScrhLj6FduONjQlb/view" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Návod na používanie čipov, prepojenie s Taskmanom</p>
                            </section>

                            <section class="box">
                                <div class="top-bar">
                                    <h1>Zamykanie budovy</h1>
                                    <a href="https://drive.google.com/file/d/1Ysoi1ODsSd96OtSHScrhLj6FduONjQlb/view" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Návod na odomykanie a zamykanie budovy</p>
                                <p>&#8226; Čo robiť v prípade alarmu?</p>
                            </section>
                            <section class="box gray">
                                <div class="top-bar">
                                    <h1>Parkovanie</h1>
                                    <a href="assets/images/ui42_ParkingMap.png" download target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                                <p>&#8226; Mapa okolia budovy s vyznačenými možnosťami parkovania</p>
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