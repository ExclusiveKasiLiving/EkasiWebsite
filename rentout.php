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

    <style>
    .contentGreen {
        background: #e1a911;
    }

    .bandStandardPadding,
    .bandTightPadding {
        padding: 26px 15px;
    }

    .advertiseButton {
        background-color: #000;
        border: 0;
        border-radius: 8px;
        color: #fff;
        cursor: pointer;
        display: block;
        font-size: 18px;
        font-weight: 400;
        height: 44px;
        line-height: 44px;
        margin: 0 auto 15px;
        max-width: 200px;
        text-align: center;
        -webkit-text-decoration: none;
        text-decoration: none;
        -webkit-transition: background .2s ease-out;
        transition: background .2s ease-out;
        width: 100%;
    }

    .row.align-items-stretch {
        display: flex;
        flex-wrap: wrap;

    }

    .card.listPropertyCard {
        display: flex;
        flex-direction: column;
    }

    .card.listPropertyCard .card-body {
        flex-grow: 1;
        background-color: aliceblue;
    }


    .listPropertyCard {
        border-radius: 20px;
        overflow: hidden;
    }

    .featureCards .listPropertyCard .cardPicture {
        border-radius: 4px 4px 0 0;
        display: flex;
    }

    img {
        height: 500px;
        max-width: 100%;
    }
    </style>



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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Rent Out Your
                                    Property</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Rent Out Your Property</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->



            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="text-center">
                                <h2>List Your Property for Rent</h2>
                                <div class="mt-5">
                                    With our far-reaching platform, Exclusive Kasi Living is able to share any property for
                                    rent to millions of
                                    monthly visitors. Exclusive Kasi Living allows you to advertise your property for rent at
                                    a cost of R390 per
                                    listing for three months, giving you access to a vast network of property seekers.
                                </div>
                            </div>
                        </div>

                        <div class="container text-center mt-5">

                            <div id="listToRent">

                                <div class="contentGreen bandTightPadding">
                                    <div class="text-center">
                                        <p class="text-white mt-3">Advertise your property to rent quickly and easily on
                                            our site for<br> as little as <span class="highlight">R390</span> per
                                            listing, for 3 months.</p>
                                        <a href="" class="advertiseButton mt-3">List your property</a>
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <div id="centreGrayBand" class="text-center">
                                        <h2>Why advertise your rental with us?</h2>
                                        <div class="bodyCopy">
                                            Exclusive Kasi Living offers so many benefits for those wanting to rent out
                                            property including:
                                        </div>
                                        <div class="row align-items-stretch mt-5">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card listPropertyCard mb-4 d-flex">
                                                    <div class="card-body d-flex flex-column justify-content-between">
                                                        <i class="fas fa-chart-line fa-4x mb-3"></i>
                                                        <h4 class="card-title">Fast results</h4>
                                                        <p class="card-text">Exclusive Kasi Living averages about 50
                                                            interested tenants per rental which means you will find
                                                            somebody to rent your property in no time.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card listPropertyCard mb-4 d-flex">
                                                    <div class="card-body d-flex flex-column justify-content-between">
                                                        <i class="fas fa-images fa-4x mb-3"></i>
                                                        <h4 class="card-title">Detailed adverts</h4>
                                                        <p class="card-text">The user-friendly platform allows you to
                                                            showcase your property to rent using a full gallery of
                                                            quality images, a detailed property description and pinned
                                                            location on our map.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card listPropertyCard mb-4 d-flex">
                                                    <div class="card-body d-flex flex-column justify-content-between">
                                                        <i class="fas fa-bell fa-4x mb-3"></i>
                                                        <h4 class="card-title">Notifications</h4>
                                                        <p class="card-text">Exclusive Kasi Living will alert potential
                                                            tenants in your area through email and SMS notifications
                                                            about your property to rent.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="card listPropertyCard mb-4 d-flex">
                                                    <div class="card-body d-flex flex-column justify-content-between">
                                                        <i class="fas fa-shield-alt fa-4x mb-3"></i>
                                                        <h4 class="card-title">Trustworthy</h4>
                                                        <p class="card-text">We conduct extensive fraud checks on all
                                                            our properties to rent so that tenants can be assured of a
                                                            trusted rental.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- <div class="boldText">If you’re looking to rent a space, then here are a few reasons
                                    why renting can be a preferred option over <a href="/for-sale">buying a
                                        property</a>:</div>

                                <div class="reasonsContainer">

                                    <div class="reason">

                                        <div class="header">
                                            <img src="/Content/Portal/images/icons/black-tick.svg">
                                            <div class="text">Flexibility</div>
                                        </div>
                                        <div class="copy">For those who are relocating or don’t require a long-term
                                            commitment, renting is definitely a better option. </div>
                                    </div>

                                    <div class="reason">
                                        <div class="header">
                                            <img src="/Content/Portal/images/icons/black-tick.svg">
                                            <div class="text">Quality <a href="/neighbourhoods">neighbourhoods</a>
                                            </div>
                                        </div>
                                        <div class="copy">The cost of renting a property might allow you to live in
                                            a neighbourhood you can’t afford to buy in. </div>
                                    </div>

                                    <div class="reason">
                                        <div class="header">
                                            <img src="/Content/Portal/images/icons/black-tick.svg">
                                            <div class="text">Freedom</div>
                                        </div>
                                        <div class="copy">If you want to leave, you don’t have to find a replacement
                                            tenant. If you’re a homeowner you would have to find a buyer.</div>
                                    </div>

                                    <div class="reason">
                                        <div class="header">
                                            <img src="/Content/Portal/images/icons/black-tick.svg">
                                            <div class="text">Insurance</div>
                                        </div>
                                        <div class="copy">There are fewer insurance costs when renting than when
                                            buying.</div>
                                    </div>

                                </div>



                                <div class="contentGreen bandTightPadding">
                                    <div id="bottomWhiteBand" class="wrapper row">
                                        <h2>Rent out your property</h2>
                                        <p class="subtitle">Advertise your property to rent quickly and easily on
                                            our site for<br> as little as <span class="highlight">R390</span> per
                                            listing, for 3 months.</p>
                                        <a href="https://myprofile.privateproperty.co.za/listings/new/rentals"
                                            class="advertiseButton">List your property</a>
                                    </div>
                                </div> -->
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