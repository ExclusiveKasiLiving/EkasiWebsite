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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <div class="banner-full-row page-banner animate__animated animate__slideInDown" style="background-image:url('images/breadcromb.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Terms And Conditions</b></h2>
            </div>
            <div class="col-md-6">
              <nav aria-label="breadcrumb" class="float-left float-md-right">
                <ol class="breadcrumb bg-transparent m-0 p-0">
                  <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Terms And Conditions</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!--	Banner   --->

      <!--	Property Grid
		===============================================================-->

            <!--	Submit property   -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-name float-left line">Exclusive Kasi Living</h2>
                        </div>
                    </div>
          <h3 style="font-size: 20px !important" class="page-name text-uppercase mt-2">STANDARD TERMS AND CONDITIONS FOR CLIENTS AND USERS</h2>
          <h4 style="font-size: 16px !important" class="page-name text-uppercase mt-2">INTRODUCTION</h3>
          <p>Exclusive Kasi Living (Pty) Ltd ("EKL") hosts a website under domain name www.ekasiliving.co.za ("the Website") for the online marketing of property listings for sale or for rent and the advertising of service providers in the real estate, legal and related industries (collectively “Advertisements”).</p>
          <p>EKL may amend these standard terms and condition ("STC's") at any time without prior notice.</p>
          <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of the website. By using this Website, you agree to accept all terms and conditions.</p>

          <h2 class="page-name text-uppercase mt-4" style="font-size: 24px !important">APPLICATION TO CLIENTS</h2>
          <p>These STC's are applicable together with the signed agreement ("the Contract") concluded between EKL and each client who advertises on the Website ("Client").</p>
          <p>If there is any discrepancy or conflict between these STC's and the Contract, the provisions of the Contract will apply.</p>

          <h2 class="page-name text-uppercase mt-4" style="font-size: 24px !important">APPLICATION TO USERS</h2>
          <p>By logging in, registering on, accessing or using the Website, all persons making use of the Website ("Users") agree to be bound by these STC's, except those provisions which, explicitly or implicitly, only apply to Clients.</p>

          <h2 class="page-name text-uppercase mt-4" style="font-size: 24px !important">EKL'S GENERAL OBLIGATIONS AND WARRANTIES</h2>
          <p>EKL must provide the following services to the Clients and Users:</p>
          <ul>
            <li>Display and market on the Website the Advertisements provided to it by the Client from time to time and subject to the limitations as to the number, type, content and design of Advertisements as reasonably determined by EKL from time to time.</li>
            <li>Provide a telephonic support service from Monday to Friday, from 08:00 to 17:00, for Clients and Users.</li>
          </ul>

          <p>EKL makes no warranties of any kind regarding the standard of the services or the content on the Website and, in particular, EKL does not warrant that:</p>
          <ul>
            <li>The Website is error-free.</li>
            <li>The Website will be accessible and operative on a 24 hour-per-day, 7 day-per-week basis.</li>
            <li>Any downloads or applications accessed through the Website are free of viruses, Trojans, or other harmful mechanisms.</li>
          </ul>

          <p>This Website is provided “as is,” with all faults, and EKL express no representations or warranties, of any kind related to the Website or the materials contained on the Website. Nothing contained on this Website shall be interpreted as advising you.</p>
        </div>
      </div>

      <!--	Footer   start-->
      <?php include("include/footer.php");?>
      <!--	Footer   start-->

      <!-- Scroll to top -->
      <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
      <!-- End Scroll To top -->
    </div>
  </div>
</div>
<!-- Wrapper End -->

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
