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
                <li class="active">
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
                        <a href="teams.php" title="DEV tím" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--html"></i>
                            <span class="nav-label">DEV tím</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="ux.php" title="UX tím" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--UX"></i>
                            <span class="nav-label">UX tím</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="pm.php" title="PM tím" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--users-2"></i>
                            <span class="nav-label">PM tím</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="accounts.php" title="Key accounts" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--donut-chart"></i>
                            <span class="nav-label">Key accounts</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="marketing.php" title="Sales & Marketing" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--certificate"></i>
                            <span class="nav-label">Sales & Marketing</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="ppc.php" title="Performance marketing" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--marketing"></i>
                            <span class="nav-label">Performance marketing</span>
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
                            <li><span>DEV tím</span></li>
                        </ul>
                    </div>

                    <div class="ibox-content">
                        <div class="flex-margin">
                            <section class="box gray">
                                <div class="top-bar no-border">
                                    <h1>Inštalácia programov</h1>
                                    <a href="" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                            </section>

                            <section class="box">
                                <div class="top-bar no-border">
                                    <h1>Prístupy</h1>
                                    <a href="" target="_blank"><button class="btn active">Stiahnuť</button></a>
                                </div>
                            </section>
                            <section class="box gray">
                                <div class="top-bar no-border">
                                    <h1>Videá</h1>
                                    <a href="" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                            </section>

                            <section class="box">
                                <div class="top-bar no-border">
                                    <h1>Nasadzovanie webu</h1>
                                    <a href="" target="_blank"><button class="btn active">Otvoriť</button></a>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bottom">
        <p class="copyright">Copyright © 1997-2022 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>