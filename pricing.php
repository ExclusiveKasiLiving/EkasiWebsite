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
    .wrapper {
        /* width: 64rem; */
        margin: 0 auto;
    }

    #generic_price_table{
	background-color: #f0eded;
}

/*PRICE COLOR CODE START*/
#generic_price_table .generic_content{
	background-color: #fff;
}

#generic_price_table .generic_content .generic_head_price{
	background-color: #f6f6f6;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
	border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
	color: #525252;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    color: #414141;
}

#generic_price_table .generic_content .generic_feature_list ul li{	
	color: #a7a7a7;
}

#generic_price_table .generic_content .generic_feature_list ul li span{
	color: #414141;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
	background-color: #E4E4E4;
	border-left: 5px solid #2ECC71;
}

#generic_price_table .generic_content .generic_price_btn a{
	border: 1px solid #2ECC71; 
    color: #2ECC71;
} 

#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg{
	border-color: #2ECC71 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #2ECC71;
	color: #fff;
}

#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head span,
#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head span{
	color: #fff;
}

#generic_price_table .generic_content:hover .generic_price_btn a,
#generic_price_table .generic_content.active .generic_price_btn a{
	background-color: #2ECC71;
	color: #fff;
} 
#generic_price_table{
	margin: 50px 0 50px 0;
    font-family: 'Raleway', sans-serif;
}
.row .table{
    padding: 28px 0;
}

/*PRICE BODY CODE START*/

#generic_price_table .generic_content{
	overflow: hidden;
	position: relative;
	text-align: center;
}

#generic_price_table .generic_content .generic_head_price {
	margin: 0 0 20px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content{
	margin: 0 0 50px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
    border-style: solid;
    border-width: 90px 1411px 23px 399px;
	position: absolute;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head{
	padding-top: 40px;
	position: relative;
	z-index: 1;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
    font-family: "Raleway",sans-serif;
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 2px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag{
	padding: 0 0 20px;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price{
	display: block;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 28px;
    font-weight: 400;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    font-family: "Lato",sans-serif;
    font-size: 60px;
    font-weight: 300;
    letter-spacing: -2px;
    line-height: 60px;
    padding: 0;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 24px;
    font-weight: 400;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    font-family: "Lato",sans-serif;
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 3px;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_feature_list ul{
	list-style: none;
	padding: 0;
	margin: 0;
}

#generic_price_table .generic_content .generic_feature_list ul li{
	font-family: "Lato",sans-serif;
	font-size: 18px;
	padding: 15px 0;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
	transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	-ms-transition: all 0.3s ease-in-out 0s;
	-o-transition: all 0.3s ease-in-out 0s;
	-webkit-transition: all 0.3s ease-in-out 0s;

}
#generic_price_table .generic_content .generic_feature_list ul li .fa{
	padding: 0 10px;
}
#generic_price_table .generic_content .generic_price_btn{
	margin: 20px 0 32px;
}

#generic_price_table .generic_content .generic_price_btn a{
    border-radius: 50px;
	-moz-border-radius: 50px;
	-ms-border-radius: 50px;
	-o-border-radius: 50px;
	-webkit-border-radius: 50px;
    display: inline-block;
    font-family: "Lato",sans-serif;
    font-size: 18px;
    outline: medium none;
    padding: 12px 30px;
    text-decoration: none;
    text-transform: uppercase;
}

#generic_price_table .generic_content,
#generic_price_table .generic_content:hover,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head h2,
#generic_price_table .generic_content .price,
#generic_price_table .generic_content:hover .price,
#generic_price_table .generic_content .generic_price_btn a,
#generic_price_table .generic_content:hover .generic_price_btn a{
	transition: all 0.3s ease-in-out 0s;
	-moz-transition: all 0.3s ease-in-out 0s;
	-ms-transition: all 0.3s ease-in-out 0s;
	-o-transition: all 0.3s ease-in-out 0s;
	-webkit-transition: all 0.3s ease-in-out 0s;
} 
@media (max-width: 320px) {	
}

@media (max-width: 767px) {
	#generic_price_table .generic_content{
		margin-bottom:75px;
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	#generic_price_table .col-md-3{
		float:left;
		width:50%;
	}
	
	#generic_price_table .col-md-4{
		float:left;
		width:50%;
	}
	
	#generic_price_table .generic_content{
		margin-bottom:75px;
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
}
@media (min-width: 1200px) {
}
#generic_price_table_home{
	 font-family: 'Raleway', sans-serif;
}

.text-center h1,
.text-center h1 a{
	color: #7885CB;
	font-size: 30px;
	font-weight: 300;
	text-decoration: none;
}
.demo-pic{
	margin: 0 auto;
}
.demo-pic:hover{
	opacity: 0.7;
}

#generic_price_table_home ul{
	margin: 0 auto;
	padding: 0;
	list-style: none;
	display: table;
}
#generic_price_table_home li{
	float: left;
}
#generic_price_table_home li + li{
	margin-left: 10px;
	padding-bottom: 10px;
}
#generic_price_table_home li a{
	display: block;
	width: 50px;
	height: 50px;
	font-size: 0px;
}
#generic_price_table_home .blue{
	background: #3498DB;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .emerald{
	background: #2ECC71;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .grey{
	background: #7F8C8D;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .midnight{
	background: #34495E;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .orange{
	background: #E67E22;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .purple{
	background: #9B59B6;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .red{
	background: #E74C3C;
	transition:all 0.3s ease-in-out 0s;
}
#generic_price_table_home .turquoise{
	background: #1ABC9C;
	transition: all 0.3s ease-in-out 0s;
}

#generic_price_table_home .blue:hover,
#generic_price_table_home .emerald:hover,
#generic_price_table_home .grey:hover,
#generic_price_table_home .midnight:hover,
#generic_price_table_home .orange:hover,
#generic_price_table_home .purple:hover,
#generic_price_table_home .red:hover,
#generic_price_table_home .turquoise:hover{
	border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
	transition: all 0.3s ease-in-out 0s;
}
#generic_price_table_home .divider{
	border-bottom: 1px solid #ddd;
	margin-bottom: 20px;
	padding: 20px;
}
#generic_price_table_home .divider span{
	width: 100%;
	display: table;
	height: 2px;
	background: #ddd;
	margin: 50px auto;
	line-height: 2px;
}
#generic_price_table_home .itemname{
	text-align: center;
	font-size: 50px ;
	padding: 50px 0 20px ;
	border-bottom: 1px solid #ddd;
	margin-bottom: 40px;
	text-decoration: none;
    font-weight: 300;
}
#generic_price_table_home .itemnametext{
    text-align: center;
    font-size: 20px;
    padding-top: 5px;
    text-transform: uppercase;
    display: inline-block;
}
#generic_price_table_home .footer{
	padding:40px 0;
}

.price-heading{
    text-align: center;
}
.price-heading h1{
	color: #666;
	margin: 0;
	padding: 0 0 50px 0;
}
.demo-button {
    background-color: #333333;
    color: #ffffff;
    display: table;
    font-size: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    margin-bottom: 50px;
    outline-color: -moz-use-text-color;
    outline-style: none;
    outline-width: medium ;
    padding: 10px;
    text-align: center;
    text-transform: uppercase;
}
.bottom_btn{
	background-color: transparent;
    color: #ffffff;
    display: table;
    font-size: 28px;
    margin: 60px auto 20px;
    padding: 10px 25px;
    text-align: center;
    text-transform: uppercase;
}
.demo-button:hover{
	background-color: #666;
	color: #FFF;
	text-decoration:none;
	
}
.bottom_btn:hover{
	background-color: #666;
	color: #FFF;
	text-decoration:none;
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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Terms And
                                    Conditions</b></h2>
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



            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="container">
                            <div class="text-center">
                                <h2>List Your Property For Sale</h2>
                                <div class="mt-5">
                                    While selling your property can be a big decision, Private Property makes the
                                    process of selling your home privately very simple. Through this dedicated South
                                    African-property site, you will be able to advertise your listing to millions of
                                    viewers who use this platform monthly. You have the option of listing the property
                                    yourself or engaging the services of one of our helpful consultants to list the
                                    property for you.
                                </div>
                            </div>
                        </div>

                        <div class="container text-center">
                            <h2 class="privatePackages mt-5">Listing Packages</h2>

                            <div id="generic_price_table">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!--PRICE HEADING START-->
                                                <div class="price-heading clearfix">
                                                </div>
                                                <!--//PRICE HEADING END-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">

                                        <!--BLOCK ROW START-->
                                        <div class="row">
                                            <div class="col-md-4">

                                                <!--PRICE CONTENT START-->
                                                <div class="generic_content clearfix">

                                                    <!--HEAD PRICE DETAIL START-->
                                                    <div class="generic_head_price clearfix">

                                                        <!--HEAD CONTENT START-->
                                                        <div class="generic_head_content clearfix">

                                                            <!--HEAD START-->
                                                            <div class="head_bg"></div>
                                                            <div class="head">
                                                                <span>Standard Package</span>
                                                            </div>
                                                            <!--//HEAD END-->

                                                        </div>
                                                        <!--//HEAD CONTENT END-->

                                                        <!--PRICE START-->
                                                        <div class="generic_price_tag clearfix">
                                                            <span class="price">
                                                                <span class="sign">R</span>
                                                                <span class="currency" content="1290.00">1290</span>
                                                                <!-- <span class="cent"></span> -->
                                                                <span class="month">/MON</span>
                                                            </span>
                                                        </div>
                                                        <!--//PRICE END-->

                                                    </div>
                                                    <!--//HEAD PRICE DETAIL END-->

                                                    <!--FEATURE LIST START-->
                                                    <div class="generic_feature_list">
                                                        <ul>
                                                            <li><span>2GB</span> Bandwidth</li>
                                                            <li><span>150GB</span> Storage</li>
                                                            <li><span>12</span> Accounts</li>
                                                            <li><span>7</span> Host Domain</li>
                                                            <li><span>24/7</span> Support</li>
                                                        </ul>
                                                    </div>
                                                    <!--//FEATURE LIST END-->

                                                    <!--BUTTON START-->
                                                    <div class="generic_price_btn clearfix">
                                                        <a class="" href="">Sign up</a>
                                                    </div>
                                                    <!--//BUTTON END-->

                                                </div>
                                                <!--//PRICE CONTENT END-->

                                            </div>

                                            <div class="col-md-4">

                                                <!--PRICE CONTENT START-->
                                                <div class="generic_content active clearfix">

                                                    <!--HEAD PRICE DETAIL START-->
                                                    <div class="generic_head_price clearfix">

                                                        <!--HEAD CONTENT START-->
                                                        <div class="generic_head_content clearfix">

                                                            <!--HEAD START-->
                                                            <div class="head_bg"></div>
                                                            <div class="head">
                                                                <span>Standard</span>
                                                            </div>
                                                            <!--//HEAD END-->

                                                        </div>
                                                        <!--//HEAD CONTENT END-->

                                                        <!--PRICE START-->
                                                        <div class="generic_price_tag clearfix">
                                                            <span class="price">
                                                                <span class="sign">$</span>
                                                                <span class="currency">199</span>
                                                                <span class="cent">.99</span>
                                                                <span class="month">/MON</span>
                                                            </span>
                                                        </div>
                                                        <!--//PRICE END-->

                                                    </div>
                                                    <!--//HEAD PRICE DETAIL END-->

                                                    <!--FEATURE LIST START-->
                                                    <div class="generic_feature_list">
                                                        <ul>
                                                            <li><span>2GB</span> Bandwidth</li>
                                                            <li><span>150GB</span> Storage</li>
                                                            <li><span>12</span> Accounts</li>
                                                            <li><span>7</span> Host Domain</li>
                                                            <li><span>24/7</span> Support</li>
                                                        </ul>
                                                    </div>
                                                    <!--//FEATURE LIST END-->

                                                    <!--BUTTON START-->
                                                    <div class="generic_price_btn clearfix">
                                                        <a class="" href="">Sign up</a>
                                                    </div>
                                                    <!--//BUTTON END-->

                                                </div>
                                                <!--//PRICE CONTENT END-->

                                            </div>


                                            <div class="col-md-4">

                                                <!--PRICE CONTENT START-->
                                                <div class="generic_content clearfix">

                                                    <!--HEAD PRICE DETAIL START-->
                                                    <div class="generic_head_price clearfix">

                                                        <!--HEAD CONTENT START-->
                                                        <div class="generic_head_content clearfix">

                                                            <!--HEAD START-->
                                                            <div class="head_bg"></div>
                                                            <div class="head">
                                                                <span>Unlimited</span>
                                                            </div>
                                                            <!--//HEAD END-->

                                                        </div>
                                                        <!--//HEAD CONTENT END-->

                                                        <!--PRICE START-->
                                                        <div class="generic_price_tag clearfix">
                                                            <span class="price">
                                                                <span class="sign">$</span>
                                                                <span class="currency">299</span>
                                                                <span class="cent">.99</span>
                                                                <span class="month">/MON</span>
                                                            </span>
                                                        </div>
                                                        <!--//PRICE END-->

                                                    </div>
                                                    <!--//HEAD PRICE DETAIL END-->

                                                    <!--FEATURE LIST START-->
                                                    <div class="generic_feature_list">
                                                        <ul>
                                                            <li><span>2GB</span> Bandwidth</li>
                                                            <li><span>150GB</span> Storage</li>
                                                            <li><span>12</span> Accounts</li>
                                                            <li><span>7</span> Host Domain</li>
                                                            <li><span>24/7</span> Support</li>
                                                        </ul>
                                                    </div>
                                                    <!--//FEATURE LIST END-->

                                                    <!--BUTTON START-->
                                                    <div class="generic_price_btn clearfix">
                                                        <a class="" href="">Sign up</a>
                                                    </div>
                                                    <!--//BUTTON END-->

                                                </div>
                                                <!--//PRICE CONTENT END-->

                                            </div>
                                        </div>
                                        <!--//BLOCK ROW END-->

                                    </div>
                                </section>
                                <footer>
                                    <a class="bottom_btn" href="#"></a>
                                </footer>
                            </div>








                            <div class="listingPackageHorizontal tabletCols row mt-5">
                                <div class="card width33 first mt-8" itemscope itemtype="http://schema.org/Product">
                                    <div class="header">
                                        <h3 itemprop="name" id="standardPackage">Standard Package</h3>
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <div class="priceOffer">
                                                <span class="now">Now</span>
                                                <span itemprop="priceCurrency" content="ZAR">R</span><span
                                                    itemprop="price" content="1290.00">1290</span>
                                            </div>
                                            <span class="vat">(Incl. VAT)</span>
                                        </div>
                                    </div>
                                    <a class="feature first greenTick" itemprop="additionalProperty" href="#sixmonths">
                                        Online for 6 months and up to 30 photos
                                    </a>
                                    <a class="feature greenTick" itemprop="additionalProperty"
                                        href="#emailandsmsalerts">
                                        Email and SMS alerts to buyers
                                    </a>
                                    <a class="feature greenTick" itemprop="additionalProperty"
                                        href="#attorneyassistance">
                                        Attorney assistance
                                    </a>
                                    <div>
                                        <a class="whiteButton fullWidthButton"
                                            href="/Portal/ListProperty/ForSalePrivateOptions?productId=402">List now</a>
                                    </div>
                                </div>

                                <div class="card width33" itemscope itemtype="http://schema.org/Product">
                                    <div class="header">
                                        <h3 itemprop="name" id="verifiedPackage">HD Package</h3>
                                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <span itemprop="priceCurrency" content="ZAR">R</span><span itemprop="price"
                                                content="2495.00">2495</span><span class="vat">(Incl. VAT)</span>
                                        </span>
                                    </div>

                                    <div class="feature showOnPhone">
                                        <h4>Everything in Standard:</h4>
                                    </div>
                                    <a class="feature first blueTick" itemprop="additionalProperty" href="#sixmonths">
                                        Online for 6 months and up to 30 photos
                                    </a>
                                    <a class="feature blueTick" itemprop="additionalProperty" href="#emailandsmsalerts">
                                        Email and SMS alerts to buyers
                                    </a>
                                    <a class="feature blueTick" itemprop="additionalProperty"
                                        href="#attorneyassistance">
                                        Attorney assistance
                                    </a>
                                    <div class="feature showOnPhone">
                                        <h4>Plus:</h4>
                                    </div>
                                    <a class="feature greenTick featureLongText" itemprop="additionalProperty"
                                        href="#hdcontent">
                                        Professionally filmed video tour and High Definition photos
                                    </a>
                                    <div class="feature greenTick" itemprop="additionalProperty">
                                        Positioned higher in results
                                    </div>
                                    <div class="specialGreenButtonHolder bottom">
                                        <a class="highlightButton blackButton"
                                            href="/Portal/ListProperty/ForSalePrivateOptions?productId=403">List now</a>
                                    </div>
                                </div>

                                <div class="card width33 last" itemscope itemtype="http://schema.org/Product">
                                    <div class="header">
                                        <h3 itemprop="name" id="featuredPackage">Featured HD Package</h3>
                                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <span itemprop="priceCurrency" content="ZAR">R</span><span itemprop="price"
                                                content="3995.00">3995</span><span class="vat">(Incl. VAT)</span>
                                        </span>
                                    </div>

                                    <div class="feature showOnPhone">
                                        <h4>Everything in HD Package:</h4>
                                    </div>
                                    <a class="feature blueTick first" itemprop="additionalProperty" href="#sixmonths">
                                        Online for 6 months and up to 30 photos
                                    </a>
                                    <a class="feature blueTick" itemprop="additionalProperty" href="#emailandsmsalerts">
                                        Email and SMS alerts to buyers
                                    </a>
                                    <a class="feature blueTick" itemprop="additionalProperty"
                                        href="#attorneyassistance">
                                        Attorney assistance
                                    </a>
                                    <a class="feature blueTick featureLongText" itemprop="additionalProperty"
                                        href="#hdcontent">
                                        Professionally filmed video tour and High Definition photos
                                    </a>
                                    <div class="feature blueTick" itemprop="additionalProperty">
                                        Positioned higher in results
                                    </div>
                                    <div class="feature showOnPhone">
                                        <h4>Plus:</h4>
                                    </div>
                                    <a class="feature greenTick featureLongText" itemprop="additionalProperty"
                                        href="#featuredlisting">
                                        Featured Listing position, towards top of results
                                    </a>
                                    <div>
                                        <a class="whiteButton fullWidthButton"
                                            href="/Portal/ListProperty/ForSalePrivateOptions?productId=404">List now</a>
                                    </div>
                                </div>
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