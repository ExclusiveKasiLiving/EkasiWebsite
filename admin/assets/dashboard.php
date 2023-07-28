<?php
session_start();
require("config.php");

// Check if the user is logged in; if not, redirect to index.php
if (!isset($_SESSION['auser'])) {
    header("location: index.php");
    exit();
}

// Fetch total number of users
$sqlTotalUsers = "SELECT COUNT(*) AS total_users FROM `user`";
$resultTotalUsers = mysqli_query($connection, $sqlTotalUsers);

// Check if the query was successful
if (!$resultTotalUsers) {
    die("Database query failed: " . mysqli_error($connection));
}

// Get the total number of users
$rowTotalUsers = mysqli_fetch_assoc($resultTotalUsers);
$totalUsers = $rowTotalUsers['total_users'];

// Fetch the number of sign-ups per month
$sqlMonthlySignups = "SELECT DATE_FORMAT(FROM_UNIXTIME(uid), '%Y-%m') AS month, COUNT(*) AS signups FROM `user` GROUP BY month";
$resultMonthlySignups = mysqli_query($connection, $sqlMonthlySignups);

// Check if the query was successful
if (!$resultMonthlySignups) {
    die("Database query failed: " . mysqli_error($connection));
}

// Prepare data for the chart
$monthlySignupsData = array();
while ($rowMonthlySignups = mysqli_fetch_assoc($resultMonthlySignups)) {
    $monthlySignupsData[] = $rowMonthlySignups;
}
?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
// Replace the example monthly signups data with the actual data you fetched from PHP
var monthlySignupsData = <?php echo json_encode($monthlySignupsData); ?>;

// Morris Area Chart for monthly sign-ups
Morris.Area({
    element: 'morrisArea',
    data: monthlySignupsData,
    xkey: 'month',
    ykeys: ['signups'],
    labels: ['Sign-ups'],
    lineColors: ['#007bff'],
    pointSize: 3,
    hideHover: 'auto',
    resize: true,
    xLabels: 'month',
    xLabelFormat: function(x) {
        return x;
    }
});
</script>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Exclusive Kasi Living - Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ekl.SVG">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    <!-- Main Wrapper -->


    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome, <?php echo $_SESSION['auser'];?></h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php echo $totalUsers; ?></h3>

                                <h6 class="text-muted">Users</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php echo $totalProperties; ?></h3>

                                <h6 class="text-muted">Properties</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-danger">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>432</h3>

                                <h6 class="text-muted">Agents</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-warning">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3>342</h3>

                                <h6 class="text-muted">Contact Message</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <!-- Users Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Users Overview</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisArea"></div>
                            <!-- Display the total number of users -->
                            <p>Total Users: <?php echo $totalUsers; ?></p>
                        </div>
                    </div>
                    <!-- /Users Chart -->
                </div>
                <div class="col-md-12 col-lg-6">

                    <!-- Invoice Chart -->
                    <div class="card card-chart">
                        <div class="card-header">
                            <h4 class="card-title">Order Status</h4>
                        </div>
                        <div class="card-body">
                            <div id="morrisLine"></div>
                        </div>
                    </div>
                    <!-- /Invoice Chart -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->


    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <!-- <script src="assets/js/chart.morris.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
    <script>
    // Replace the example monthly signups data with the actual data you fetched from PHP
    var monthlySignupsData = <?php echo json_encode($monthlySignupsData); ?>;

    // Morris Area Chart for monthly sign-ups
    Morris.Area({
        element: 'morrisArea',
        data: monthlySignupsData,
        xkey: 'month',
        ykeys: ['signups'],
        labels: ['Sign-ups'],
        lineColors: ['#007bff'],
        pointSize: 3,
        hideHover: 'auto',
        resize: true,
        xLabels: 'month',
        xLabelFormat: function(x) {
            return x;
        }
    });
    </script>

</body>

</html>