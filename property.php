<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
///code			

// Assuming $row['publish_time'] contains the timestamp of the listing's publication
$publishTime = strtotime($row['publish_time']);
$currentTimestamp = time();
$diffSeconds = $currentTimestamp - $publishTime;
$diffMonths = floor($diffSeconds / (30 * 24 * 60 * 60)); // Calculate the difference in months

if ($diffMonths > 0) {
    $timeAgo = $diffMonths . " Months Ago";
} else {
    $timeAgo = "Less than a Month Ago";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Homex template">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
    <link rel="shortcut icon" href="images/favicon-2.png">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--	Title
	=========================================================-->
    <title>Exclusive Kasi Living - Property</title>
</head>



<body>




    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php");?>
            <!--	Header end  -->

            <!--	Banner   --->
            <div class="banner-full-row page-banner animate__animated animate__slideInDown"
                style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Properties</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Properties</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->

            <!--	Property Grid
		===============================================================-->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <?php
                    $limit = 10; // Number of listings per page
                    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number from the URL query parameter

                    // Calculate the offset based on the current page and limit
                    $offset = ($page - 1) * $limit;

                    // Fetch the total count of listings
                    $countQuery = mysqli_query($con, "SELECT COUNT(*) as count FROM `property`");
                    $totalCount = mysqli_fetch_assoc($countQuery)['count'];

                    // Calculate the total number of pages
                    $totalPages = ceil($totalCount / $limit);

                    // Fetch the listings with the LIMIT and OFFSET clauses
                    $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid AND approved = 1 ORDER BY date DESC LIMIT $limit OFFSET $offset");

                    while ($row = mysqli_fetch_array($query)) {
                        // Your existing listing HTML code
                        ?>
                                <div class="col-md-6">
                                    <div class="featured-thumb hover-zoomer mb-4">
                                        <div class="overlay-black overflow-hidden position-relative"
                                            style="height:209.83px">
                                            <img src="admin/property/<?php echo $row['21']; ?>" alt="pimage">
                                            <div class="sale bg-secondary text-white">For <?php echo $row['6']; ?></div>
                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a
                                                        href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['2']; ?></a>
                                                </h5>
                                                <span class="location text-capitalize"><i
                                                        class="fas fa-map-marker-alt text-primary"></i>
                                                    <?php echo $row['17'] . ', ' . $row['19']; ?></span>
                                            </div>
                                            <div class="px-4 pb-4 d-inline-block w-100">
                                                <div class="float-left text-capitalize"><i
                                                        class="fas fa-user text-primary mr-1"></i>By:
                                                    <?php echo $row['uname']; ?></div>
                                                <div class="float-right"><i
                                                        class="far fa-calendar-alt text-primary mr-1"></i><?php $date = date("Y-m-d", strtotime($row['32'])); echo $date;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                    } ?>
                            </div>

                            <!-- Pagination -->
                            <?php if ($totalPages > 1) { ?>
                            <div class="col-lg-12">
                                <ul class="pagination justify-content-center mt-4">
                                    <?php if ($page > 1) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?page=<?php echo ($page - 1); ?>">Previous</a>
                                    </li>
                                    <?php } ?>
                                    <li class="page-item active">
                                        <span class="page-link"><?php echo $page; ?></span>
                                    </li>
                                    <?php if ($page < $totalPages) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="?page=<?php echo ($page + 1); ?>">Next</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="col-lg-4">

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Search
                                    Property</h4>
                                <ul class="property_list_widget">
                                    <form method="post" action="propertygrid.php">
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <input type="text" name="city" id="city" class="form-control"
                                                placeholder="Enter city">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="filter" value="Filter" class="btn btn-primary">
                                        </div>
                                    </form>
                                    <form method="post" action="propertygrid.php">
                                        <div class="form-group">
                                            <label for="type">Type:</label>
                                            <select class="form-control" name="type">
                                                <option value="">Select Type</option>
                                                <option value="Apartment">Apartment</option>
                                                <option value="Room">Room</option>
                                                <option value="Back Room Normal">Back Room (Normal)</option>
                                                <option value="Back Room Garage">Back Room (Garage)</option>
                                                <option value="Flat">Flat</option>
                                                <option value="House">House</option>
                                                <option value="Bachelor">Bachelor</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="filter" value="Filter" class="btn btn-primary">
                                        </div>
                                    </form>
                                    <form method="post" action="propertygrid.php">
                                        <div class="form-group">
                                            <label for="stype">For Rent or Sale:</label>
                                            <input type="text" name="stype" id="stype" class="form-control"
                                                placeholder="Rent or Sale">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="filter" value="Filter" class="btn btn-primary">
                                        </div>
                                    </form>
                                </ul>
                            </div>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent
                                    Property Add</h4>
                                <ul class="property_list_widget">
                                    <?php
                        $recentQuery = mysqli_query($con, "SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
                        while ($row = mysqli_fetch_array($recentQuery)) {
                            ?>
                                    <li>
                                        <img src="admin/property/<?php echo $row['21']; ?>" alt="pimage"
                                            style="width: 80px; height: 53.33px; object-fit: cover;">
                                        <h6 class="text-secondary hover-text-primary text-capitalize"><a
                                                href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['2']; ?></a>
                                        </h6>
                                        <span class="font-14"><i
                                                class="fas fa-map-marker-alt icon-primary icon-small"></i>
                                            <?php echo $row['17'] . ', ' . $row['18']; ?></span>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--	Footer   start-->
            <?php include("include/footer.php");?>
            <!--	Footer   start-->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/custom.js"></script>
</body>

</html>