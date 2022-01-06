<?php

session_start();
$id = $_SESSION['id'];
$name = $_SESSION['full_name'];
$position = $_SESSION['position'];
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
                            <li><span>Zoznam reportov</span></li>
                        </ul>
                    </div>


                    <input class="search" type="text" placeholder="hľadať">



                    <div class="ibox-content">
                        <section class="filters">
                            <div class="sort">
                                <p>Zoradiť:</p>
                                <p class="text-blue">Od najnovších po najstaršie<i class="icon fa fa-2x icon--arrow-blue"></i></p>

                            </div>
                            <a class="btn btn-secondary">Od<i class="icon fa fa-2x icon--arrow-blue"></i></a>
                            <a class="btn btn-secondary">Do<i class="icon fa fa-2x icon--arrow-blue"></i></a>
                            <div class="state">
                                <a class="active btn btn-secondary">Všetky (5)</a>
                                <a class="btn btn-secondary">Invoiced (1)</a>
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
                                        Meno a priezvisko
                                    </th>
                                    <th>
                                        Dátum
                                    </th>
                                    <th>
                                        Oddelenie
                                    </th>
                                    <th>
                                        Výsledok za mesiac
                                    </th>
                                    <th>
                                        Celková odmena
                                    </th>
                                    <th>
                                        Superhrubá mzda
                                    </th>
                                    <th>
                                        Úväzok
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
                                            <?php echo $name ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a class="underline" href="report.php">november 2021 </a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <?php echo $position ?>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 207,75 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 559,42 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2 539,32 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            85 %
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            READY
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            <?php echo $name ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a class="underline" href="report.php">október 2021 </a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <?php echo $position ?>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 207,75 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 559,42 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2 539,32 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            85 %
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            INVOICED
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            <?php echo $name ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a class="underline" href="report.php">september 2021 </a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <?php echo $position ?>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 207,75 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 559,42 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2 539,32 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            85 %
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            INVOICED
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>
                                            <?php echo $name ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a class="underline" href="report.php">august 2021 </a>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            <?php echo $position ?>
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 207,75 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            1 559,42 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            2 539,32 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            85 %
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            INVOICED
                                        </span>
                                    </td>
                                </tr>

                                <tr class="total">
                                    <td>
                                        <span>
                                            Total
                                        </span>
                                    </td>
                                    <td>
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>

                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            5 207,75 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            4 559,42 €
                                        </span>
                                    </td>
                                    <td class="">
                                        <span>
                                            8 539,32 €
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
                                </tr>



                                <!-- <a class="btn btn-secondary" href="https://recsysapp.localhost/recommendations/dedoles">Detail</a> -->


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer>
        <p class="copyright">Copyright © 1999-2021 ui42. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>