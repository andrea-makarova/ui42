<?php

session_start();
$id = $_SESSION['id'];
$name = $_SESSION['full_name'];
$employment = $_SESSION['employment_type'];
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
                    <li class="inactive">
                        <a href="tasks.php" title="Tasky" class="nav-link">
                            <i class="nav-icon fa fa-2x nav-icon--dashboard"></i>
                            <span class="nav-label">Tasky</span>
                        </a>
                    </li>
                    <li class="active">
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
                            <li class="back"><a href="reports.php" class="back-link"></a></li>
                            <li><a href="reports.php">Reporty</a></li>
                            <li><span><a class="underline"><?php echo $name ?></a> november 2021</span></li>
                        </ul>
                        <div class="labels-right">
                            <a class="btn btn-secondary">Výplatná páska</a>
                            <a class="active-green btn btn-secondary">Ready</a>
                        </div>
                    </div>

                    <section class="salary">

                    </section>


                    <div class="ibox-content">
                        <div class="top-tables">
                            <table class="table--secondary <?php echo $employment ?> none">
                                <colgroup>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>
                                            Celková odmena za prácu
                                        </th>
                                        <th>
                                            2500,50 €
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>
                                                Tasky
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                749,30 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Hodinová mzda
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                11,30 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Garantovaná mzda
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                1200,00 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="last">
                                        <td>
                                            <span>
                                                Plán
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                1350,30 €
                                            </span>
                                        </td>
                                    </tr>


                                    <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                                </tbody>
                            </table>
                            <table class="table--secondary <?php echo $employment ?>">
                                <colgroup>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>
                                            Celková odmena za prácu
                                        </th>
                                        <th>
                                            2500,50 €
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>
                                                Zmluvný (základný) plat
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                1 749,30 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Základný tarifný plat
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                1630,00 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Tasky
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                749,30 € (132,5h)
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Náhrada za dovolenku
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                52,00 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Náhrada za štátne sviatky
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                36,00 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Super hrubá mzda
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                2 805,45 €
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="last">
                                        <td>
                                            <span>
                                                Plán
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                2 305,45 € (150h)
                                            </span>
                                        </td>
                                    </tr>


                                    <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                                </tbody>
                            </table>
                            <table class="table--secondary <?php echo $employment ?>">
                                <colgroup>
                                    <col>
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>
                                            Odpracované dni
                                        </th>
                                        <th>
                                            20 d
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>
                                                Sviatky
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                2 d
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                Dovolenka
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                3 d
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                                PN
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                1 d
                                            </span>
                                        </td>
                                    </tr>
                                    <tr class="last">
                                        <td>
                                            <span>
                                                Dovolenka zostatok
                                            </span>
                                        </td>
                                        <td class="">
                                            <span>
                                                12 d
                                            </span>
                                        </td>
                                    </tr>


                                    <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                                </tbody>
                            </table>

                        </div>
                        <section class="filters">
                            <div class="sort">
                                <p>Zoradiť:</p>
                                <p class="text-blue">Od najstarších po najnovšie<i class="icon fa fa-2x icon--arrow-blue"></i></p>
                            </div>
                        </section>

                        <table class="table table--stretch table--sortable table--main">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>
                                        Názov tasku
                                    </th>
                                    <th>
                                        Stav
                                    </th>
                                    <th>
                                        Projekt
                                    </th>
                                    <th>
                                        Odpracovaný čas
                                    </th>
                                    <th>
                                        Príjem
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span >
                                         <a class="black underline" href="task.php">Blogové obrázky</a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            IMPLEMENTED
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            ui42 / MKT content creation
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1:30 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            18,75 €
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="black">
                                            FB grafika 11/2021
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            PROGRAMMING IN PROGESS
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            levnytextil.cz / PrintX sro marketing
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2:25 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            16,25 €
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="black">
                                            Onboarding - november
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            IMPLEMENTED BY DEV
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            ui42 / HR internal
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            0:15 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            6,67 €
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="black">
                                            KOKU grafika
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            INVOICED
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            KOKU / support
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            16:00 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2,00 €
                                        </span>
                                    </td>
                                </tr>
                                <tr class="total">
                                    <td>
                                        <span>
                                            Spolu
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            18:40 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            48,33 €
                                        </span>
                                    </td>
                                </tr>


                                <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                            </tbody>
                        </table>

                        <section class="filters">
                            <div class="sort">
                                <p>Zapísané, nenatrackované tasky</p>
                            </div>
                        </section>

                        <table class="table table--stretch table--sortable table--main">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>
                                        Názov tasku
                                    </th>
                                    <th>
                                        Stav
                                    </th>
                                    <th>
                                        Projekt
                                    </th>
                                    <th>
                                        Odpracovaný čas
                                    </th>
                                    <th>
                                        Príjem
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="black">
                                            World Usability Day grafika
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            ui42 / MKT content creation
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1:10 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            8,75 €
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="black">
                                            Feedo - november
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            FEEDO / UX
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            13:35 h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            16,58 €
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
        <footer class="footer">
            <p class="copyright">Copyright © 1997-2022 ui42. All rights reserved.</p>
        </footer>
    </div>

    <script src="script.js"></script>
</body>

</html>