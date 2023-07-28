<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

///search code
	
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
    <title>Exclusive Kasi Living - Property Grid</title>
</head>

<!-- Chat Bot Code -->
<!-- <div id="assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"></div>
  <script src="https://unpkg.com/assistant-widget@1.5.6/dist/lib.js"></script>
  <script>
      WAWidget.init({
          el: document.querySelector("#assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"),
          endpoint: "https://assistant.workativ.com/widget",
          widget_id: "05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4",
          openByDefault: false
      });
  </script> -->
<!-- Chat Bot Code End -->

<body>

    <!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
-->


    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php");?>
            <!--	Header end  -->

            <!--	Banner   --->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Details</b>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Property Details</li>
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
                                    if (isset($_REQUEST['filter'])) {
                                        $type = $_REQUEST['type'];
                                        $stype = $_REQUEST['stype'];
                                        $city = $_REQUEST['city'];
                                    
                                        $sql = "SELECT * FROM property WHERE 1";
                                    
                                        if (!empty($city)) {
                                            $sql .= " AND city LIKE '%$city%'";
                                        }
                                    
                                        if (!empty($type)) {
                                            $sql .= " AND type = '$type'";
                                        }
                                    
                                        if (!empty($stype)) {
                                            $sql .= " AND stype = '$stype'";
                                        }
                                    
                                        $result = mysqli_query($con, $sql);
                                    
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                            // Rest of the code to display the results
                                ?>

                                <div class="col-md-6">
                                    <div class="featured-thumb hover-zoomer mb-4">
                                        <div class="overlay-black overflow-hidden position-relative">
                                            <img src="admin/property/<?php echo $row['21']; ?>" alt="pimage">
                                            <div class="sale bg-secondary text-white">For <?php echo $row['6']; ?></div>
                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-primary mb-2 text-capitalize">
                                                    <a href="propertydetail.php?pid=<?php echo $row['0']; ?>">
                                                        <?php echo $row['2']; ?>
                                                    </a>
                                                </h5>
                                                <span class="location text-capitalize">
                                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                                    <?php echo $row['18'] . ', ' . $row['19']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
            }
        } else {
            echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
        }
    }
?>





                                <!--    <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center mt-4">
                                        <li class="page-item disabled"> <span class="page-link">Previous</span> </li>
                                        <li class="page-item active" aria-current="page"> <span class="page-link"> 1 <span class="sr-only">(current)</span> </span> </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                    </ul>
                                </nav>
                            </div>  -->
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <!-- <div class="sidebar-widget">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">EMI Calculator</h4>
						<form class="d-inline-block w-100" action="calc.php" method="post">
                            <label class="sr-only">Property Amount</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" name="amount" placeholder="Property Price">
                            </div>
                            <label class="sr-only">Month</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="text" class="form-control" name="month" placeholder="Enter Months">
                            </div>
                            <label class="sr-only">Interest Rate</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">%</div>
                                </div>
                                <input type="text" class="form-control" name="interest" placeholder="Interest Rate">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-primary mt-4">Calculate EMI</button>
                        </form>
                        </div> -->

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
                                                <option name="type" id="type" value="">Select Type</option>
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
                                            <!-- <label for="stype">For Rent or Sale:</label> -->
                                            <label for="stype">For Rent</label>
                                            <input type="text" name="stype" id="stype" class="form-control"
                                                placeholder="Rent">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="filter" value="Filter" class="btn btn-primary">
                                        </div>
                                    </form>



                                    <!-- <?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="admin/property/<?php echo $row['21'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-primary text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['2'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-primary icon-small"></i> <?php echo $row['17'] . ', ' . $row['18']; ?></span>
                                    
                                </li>
                                <?php } ?> -->

                                </ul>
                            </div>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recent
                                    Property Add</h4>
                                <ul class="property_list_widget">

                                    <?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                    <li> <img src="admin/property/<?php echo $row['21'];?>" alt="pimage">
                                        <h6 class="text-secondary hover-text-primary text-capitalize"><a
                                                href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['2'];?></a>
                                        </h6>
                                        <span class="font-14"><i
                                                class="fas fa-map-marker-alt icon-primary icon-small"></i>
                                            <?php echo $row['18'] . ', ' . $row['19']; ?></span>

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