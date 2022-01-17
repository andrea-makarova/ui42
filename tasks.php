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
                <li class="active">
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
                        <a href="tasks.php" title="Tasky" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--dashboard"></i>
                            <span class="nav-label">Tasky</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="reports.php" title="Reporty" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--reports"></i>
                            <span class="nav-label">Reporty</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="timetracker.php" title="Timetracker" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--timetracker"></i>
                            <span class="nav-label">Timetracker</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="salary.php" title="Vyplatne pasky" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--pasky"></i>
                            <span class="nav-label">Výplatné pásky</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="attendance.php" title="Dochadzka" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--dochadzka"></i>
                            <span class="nav-label">Dochádzka</span>
                        </a>
                    </li>
                    <li class="inactive">
                        <a href="help.php" title="pomoc" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--pomoc"></i>
                            <span class="nav-label">Pomoc</span>
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
                            <li><span>Zoznam taskov</span></li>
                        </ul>
                        <div class="labels-right">
                            <a class="btn btn-tertiary">+ Nový task</a>
                        </div>
                    </div>

                    <input class="search" type="text" placeholder="hľadať">

                    <section class="filters">
                        <div class="sort">
                            <p>Zoradiť:</p>
                            <p class="text-blue">Abecedne<i class="icon fa fa-2x icon--arrow-blue"></i></p>

                        </div>
                        <a class="btn btn-secondary">Všetky tasky<i class="icon fa fa-2x icon--arrow-blue"></i></a>
                        <a class="btn btn-secondary">Všetky projekty<i class="icon fa fa-2x icon--arrow-blue"></i></a>
                    </section>

                    <div class="ibox-content">

                        <table class="table table--stretch table--sortable table--main" wire:loading.delay.class="loading">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Názov tasku
                                    </th>
                                    <th>
                                        Názov projektu
                                    </th>
                                    <th>
                                        Projektman
                                    </th>
                                    <th>
                                        Stav
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>
                                            #01
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <a href="task.php" class="underline">Blogové obrázky</a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            ui42 / MKT content creation
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Andrej Kajan
                                        </span>
                                    </td>
                                    <td class="state">
                                        <span>
                                            IMPLEMENTED
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            #02
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <a href="task.php" class="underline">FB grafika 11/2021</a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            levnytextil.cz / PrintX sro marketing
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Andrej Kajan
                                        </span>
                                    </td>
                                    <td class="state">
                                        <span>
                                            PROGRAMMING IN PROGRESS
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            #03
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <a href="task.php" class="underline">Onboarding - november</a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            ui42 / HR internal
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Andrej Kajan
                                        </span>
                                    </td>
                                    <td class="state">
                                        <span>
                                            IMPLEMENTED
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            #04
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <a href="task.php" class="underline">KOKU grafika</a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            KOKU / support
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Andrej Kajan
                                        </span>
                                    </td>
                                    <td class="state">
                                        <span>
                                            INVOICED
                                        </span>
                                    </td>
                                </tr>


                                <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="passwords <?php echo $first_login ?>">
        <section class="passwords-modal">
            <h1>Vitaj v ui42 </h1>
            <h3>Pre optimálne začlenenie do firmy ti odporúčame
                nasledovať niekoľko jednoduchých krokov</h3>
            <section class="apps">
                <div>
                    <button>
                        <img src="assets/images/mattermost.svg" alt="mattermost logo">
                    </button>
                    <h1>Prihlás sa do Mattermost</h1>
                    <p>Aplikácia vďaka ktorej sa spojíš s kolegami</p>
                    <br>
                    <p class="credentials">Prihlasovacie meno: <span><?php echo $email ?></span></p>
                    <p class="credentials">Heslo: <span> <?php

                                                            function rand_string($length)
                                                            {

                                                                $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                                                                return substr(str_shuffle($chars), 0, $length);
                                                            }

                                                            echo rand_string(8);

                                                            ?> </span></p>
                </div>
                <div>
                    <button>
                        <img src="assets/images/buxus.svg" alt="mattermost logo">
                    </button>
                    <h1>Prihlás sa do BUXUSu</h1>
                    <p>Náš vlastný CMS systém</p>
                    <br>
                    <p class="credentials">Prihlasovacie meno: <span><?php echo $email ?></span></p>
                    <p class="credentials">Heslo: <span> <?php echo rand_string(8); ?> </span></p>
                </div>
                <div>
                    <button class="google">
                        <img src="assets/images/github.svg" alt="mattermost logo">
                    </button>
                    <h1>Prihlás sa do GitHubu</h1>
                    <p>Tu si budeš ukladať svoj kód</p>
                    <br>
                    <p class="credentials">Prihlasovacie meno: <span><?php echo $email ?></span></p>
                    <p class="credentials">Heslo: <span> <?php echo rand_string(8); ?></span></p>
                </div>
            </section>
            <h3>Všetky prístupy neskôr nájdeš aj vo svojom profile,
                no odporúčame ti prihlásiť sa čo najskôr</h3>
            <form action="update-user.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-secondary active">Pokračovať</button>
            </form>
        </section>
    </section>
    <footer class="footer">
        <p class="copyright">Copyright © 1997-2022 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>