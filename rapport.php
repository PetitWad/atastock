<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Script aganda -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });

    </script>

    <!-- First graph -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                ['2004/05', 165, 938, 522, 998, 450, 614.6],
                ['2005/06', 135, 1120, 599, 1268, 288, 682],
                ['2006/07', 157, 1167, 587, 807, 397, 623],
                ['2007/08', 139, 1110, 615, 968, 215, 609.4],
                ['2008/09', 136, 691, 629, 1026, 366, 569.6]
            ]);

            var options = {
                title: 'Monthly Coffee Production by Country',
                vAxis: { title: 'Cups' },
                hAxis: { title: 'Month' },
                seriesType: 'bars',
                series: { 5: { type: 'line' } }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div_one'));
            chart.draw(data, options);
        }
    </script>

    <!-- Second graph -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2013', 1000, 400],
                ['2014', 1170, 460],
                ['2015', 660, 1120],
                ['2016', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                hAxis: { title: 'Year', titleTextStyle: { color: '#333' } },
                vAxis: { minValue: 0 }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div_two'));
            chart.draw(data, options);
        }
    </script>
    <!-- three graph -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2004', 1000, 400],
                ['2005', 1170, 460],
                ['2006', 660, 1120],
                ['2007', 1030, 540]
            ]);

            var options = {
                title: 'Company Performance',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div_three'));

            chart.draw(data, options);
        }
    </script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard | ATASTOCK</title>
    <meta name=" viewport" content="width=device-width, initial-scale=1">

    <!-- ======= Styles ====== -->
      <link rel="stylesheet" href="assets/css/style.css">
    <!-- ======= Lien boostrap ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ======= Lien boostrap icon ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- --------------------------------------- bootstrap js------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="__container">
        <?php require_once('nav.php')  ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php require_once('topbar.php')  ?>

        <!-- ======================= Header of each page  ================== -->
        <header class="page-header shadow p-2 mt-4">
            <h5> 
                <span class="page-icon">
                <ion-icon name="stats-chart-outline"></ion-icon>
                </span>Rapport
            </h5>
        </header>
        <!-- ======================= Content ================== -->

            <div class="container mt-4">
                <!-- Widgets  graph -->
                <div class="row mb-2">
                    <div class="col-lg-4 col-md-6">
                        <div id="chart_div_one"></div>
                    </div>
                    <div class="col-lg-4">
                        <div id="chart_div_two"></div>
                    </div>
                    <div class=" col-lg-4 ">
                        <div id="chart_div_three"></div>
                    </div>
                </div>
                <!-- fin Widgets graph -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">AVAILABLE EQUIPMENT</h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"><i class="bi bi-box-seam-fill"></i>&nbsp;Item</sup></th>
                                            <th scope="col"><i class="bi bi-bookmarks"></i>&nbsp;Type Item</th>
                                            <th scope="col"><i class="bi bi-geo-fill"></i>&nbsp;Location</th>
                                            <th scope="col"><i class="bi bi-link-45deg"></i>&nbsp;File</th>
                                            <th><i class="bi bi-calendar-event"></i>&nbsp;Date in stock</th>
                                            <th class="col">Print</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Imprimante</td>
                                            <td>HP</td>
                                            <td>Rssources humaine</td>
                                            <td><img style="width: 30px; height: 33px;" src="assets/images/printer.png" alt="">
                                            </td>
                                            <td>12-Jun-23</td>
                                            <td><a href=""><i class="bi bi-printer-fill text-primary"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Desktop</td>
                                            <td>DELL</td>
                                            <td>Rssources humaine</td>
                                            <td><img style="width: 30px; height: 33px;" src="assets/images/computer.png"
                                                    alt="">
                                            </td>
                                            <td>02-Sept-23</td>
                                            <td><a href=""><i class="bi bi-printer-fill text-primary"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Hub</td>
                                            <td>Router</td>
                                            <td>Departement DEV</td>
                                            <td><img style="width: 30px; height: 33px;" src="assets/images/hub.png" alt="">
                                            </td>
                                            <td>23-May-23</td>
                                            <td><a href=""><i class="bi bi-printer-fill text-primary"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                ATALOU | Agenda
                            </div>
                            <div class="card-body">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                ATALOU | Inventory
                            </div>
                            <div class="card-body">
                                <table class="table table-sm table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom Art</th>
                                            <th>Fournisseur</th>
                                            <th>Qnt Dispo</th>
                                            <th>valeur Total</th>
                                            <th>Date mise a jour</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 
                                                <a href=""><i class="bi bi-printer-fill text-primary"></i></a>
                                                | Desktop
                                            </td>
                                            <td>HP</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>23-Aout-23</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                                <a href=""><i class="bi bi-printer-fill text-primary"></i></a>
                                                | Router
                                            </td>
                                            <td>Cisco</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>23-Aout-23</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 
                                                <a href=""><i class="bi bi-printer-fill text-primary"></i></a>
                                                | Switch
                                            </td>
                                            <td>Cisco</td>
                                            <td>12</td>
                                            <td>20</td>
                                            <td>23-Aout-23</td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>