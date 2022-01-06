<?php

session_start();
$id = $_SESSION['id'];
$name = $_SESSION['full_name'];
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
                            <li class="back"><a href="tasks.php" class="back-link"></a></li>
                            <li><a href="tasks.php">Tasky</a></li>
                            <li><span>Blogové obrázky</span></li>
                        </ul>
                        <div class="labels-right">
                            <a class="btn btn-secondary">Implemented by dev <i class="icon fa fa-2x icon--arrow-blue"></i></a>
                            <a class="btn btn-tertiary">Timetracker <i class="nav-icon--stopwatch"></i></a>
                        </div>
                    </div>
                    <section></section>

                    <section class="task-details">
                        <h3>Detaily</h3>
                        <div>
                            <div class="text">
                                <p>Postupne budeme aktualizovať všetky displejové reklamy do novej formy - one-stop shop. Všetko by sa to nieslo v duchu tvojej grafiky
                                    do ročenky.
                                    <br>
                                    <br>
                                    Išlo by o samostatné prvky, ktoré by sa potom nahádzali
                                    do bannersnacku.
                                    <br>
                                    <br>
                                    Posielam aj príklad ako to momentálne vyzerá (alebo takto). V maili
                                    ti zároveň posielam príklad jednotlivých prvkov, kde sú aj rozmery.
                                </p>
                            </div>
                            <p class="edit">Editovať</p>
                        </div>
                    </section>

                    <section class="tabs">
                        <h3 class="active-tab">Trackovanie</h3>
                        <h3>Report</h3>
                        <h3>Subtasky</h3>
                    </section>
                    <hr class="tabs-line">
                    <form class="tracking">
                        <h3>Nový zápis</h3>
                        <div class="inputs">
                            <div>
                                <label for="date">Dátum</label><br>
                                <input name="date" type="text" placeholder="10.12.2021">
                            </div>
                            <div>
                                <label for="time">Odpracovaný čas</label><br>
                                <input name="time" type="text" placeholder="00 h 00 m">
                            </div>
                            <div>
                                <label for="note">Poznámka</label><br>
                                <input name="note" type="text" placeholder="Čo si urobil?">
                            </div>
                            <a class="btn btn-secondary">Uložiť</a>
                        </div>
                    </form>
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
                                        Dátum
                                    </th>
                                    <th>
                                        Odpracovaný čas
                                    </th>
                                    <th>
                                        Poznámka
                                    </th>
                                    <th>
                                        Príjem
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>
                                            1.12.2021
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1:30h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Zapracovanie pripomienok
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
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2:25h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Retušovanie obrázkov
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
                                        <span>
                                            2.12.2021
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            0:15h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

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
                                        <span>
                                            3.12.2021
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            16:00h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            Príprava grafiky
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            36,40 €
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
                                            18:40h
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            123,65 €
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
            <p class="copyright">Copyright © 1999-2021 ui42. All rights reserved.</p>
        </footer>
    </div>

    <script src="script.js"></script>
</body>

</html>