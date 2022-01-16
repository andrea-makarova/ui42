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
                <li class="active">
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
                    <li class="inactive">
                        <a href="contacts.php" title="Contacts" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--phone"></i>
                            <span class="nav-label">Kontaky</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="board.php" title="Board" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--users"></i>
                            <span class="nav-label">Vedenie</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="structure.php" title="Organisational structure" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--diagram"></i>
                            <span class="nav-label">Organizačná štruktúra</span>
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
                            <li><span>Vedenie</span></li>
                        </ul>
                    </div>

                    <div class="ibox-content">
                        <div class="flex">
                            <section class="box">
                                <div class="top-bar">
                                    <h1>Andrej Kajan</h1>
                                    <a href="https://www.ui42.com/our-team/andrej-kajan" target="_blank"><button class="btn active">Zobraziť profil</button></a>
                                </div>
                                <img src="assets/images/profiles/Andrej-Kajan.png" alt="">
                                <div class="member-info">
                                    <p>CEO ui42</p>
                                    <a href="mailto:andrej.kajan@ui42.com">andrej.kajan@ui42.com</a>
                                    <a href="tel:+421 903 500 347">+421 903 500 347</a>
                                </div>
                            </section>

                            <section class="box">
                                <div class="top-bar">
                                    <h1>Martin Krupa</h1>
                                    <a href="https://www.ui42.com/our-team/martin-krupa" target="_blank"><button class="btn active">Zobraziť profil</button></a>
                                </div>
                                <img src="assets/images/profiles/Martin-Krupa.png" alt="">
                                <div class="member-info">
                                    <p>Shareholder & Board Member Online42</p>
                                    <a href="mailto:martin.krupa@ui42.com">martin.krupa@ui42.com</a>
                                    <a href="tel:+421 905 403 728">+421 905 403 728</a>
                                </div>
                            </section>

                            <section class="box">
                                <div class="top-bar">
                                    <h1>Róbert Mráz</h1>
                                    <a href="https://www.ui42.com/our-team/robert-mraz" target="_blank"><button class="btn active">Zobraziť profil</button></a>
                                </div>
                                <img src="assets/images/profiles/Robert-Mraz.png" alt="">
                                <div class="member-info">
                                    <p>Shareholder & CEO Online42</p>
                                    <a href="mailto:robert.mraz@ui42.com">robert.mraz@ui42.com</a>
                                    <a href="tel:+421 905 403 730">+421 905 403 730</a>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p class="copyright">Copyright © 1997-2022 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>