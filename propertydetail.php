<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
$error = "";
$msg = "";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {

        $sql = "INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Message Sent Successfully</p>";
        } else {
            $error = "<p class='alert alert-warning'>Message Not Sent Successfully</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
    }
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
    <title>Exclusive Kasi Living - Property Detail</title>
</head>


<body>

    <style>
    @media (min-width: 768px) {
        .hide-on-desktop {
            display: none;
        }
    }
    </style>

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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Detail</b>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Property Detail</li>
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

                        <?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>

                        <div class="col-lg-8">

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="single-property"
                                        style="width:1200px; height:700px; margin:30px auto 50px;">
                                        <!-- Slide 1-->
                                        <!-- <div class="ls-slide" data-ls="duration:7500;">
                                            <img width="1920" height="1080"
                                                src="admin/property/<?php echo $row['21'];?>" class="ls-bg" alt="" />
                                        </div> -->

                                        <div class="ls-slide" data-ls="duration:7500;">
                                            <img width="auto" height="auto"
                                                src="admin/property/<?php echo $row['21'];?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 2-->
                                        <div class="ls-slide" data-ls="duration:7500;">
                                        <img width="auto" height="auto"
                                                src="admin/property/<?php echo $row['22'];?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 3-->
                                        <div class="ls-slide" data-ls="duration:7500;">
                                        <img width="auto" height="auto"
                                                src="admin/property/<?php echo $row['23'];?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 4-->
                                        <div class="ls-slide" data-ls="duration:7500;">
                                        <img width="auto" height="auto"
                                                src="admin/property/<?php echo $row['24'];?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 5-->
                                        <div class="ls-slide" data-ls="duration:7500;">
                                        <img width="auto" height="auto"
                                                src="admin/property/<?php echo $row['25'];?>" class="ls-bg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['2'];?></h5>
                            <span class="mb-sm-20 d-block text-capitalize"><i
                                    class="fas fa-map-marker-alt text-primary font-12"></i>
                                &nbsp;<?php echo $row['17'] . ', ' . $row['18'] . ', ' . $row['19']; ?></span>
                            <!-- <a style="color: #25d366;"
                                href="https://api.whatsapp.com/send/?phone=<?php echo $_SESSION['uphone']; ?>&text=Hello%20<?php echo $row['uname']; ?>,%20I%20am%20interested%20in%20the%20property%20listing%20(<?php echo $row['2']; ?>)%20you%20posted.%20Can%20you%20provide%20more%20information?%20&type=phone_number&app_absent=0"
                                target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-whatsapp fa-2x"></i>
                                &nbsp;WhatsApp User
                            </a> -->

                            <a href="https://api.whatsapp.com/send/?phone=27<?php echo $row['uphone'];?>&text=Hello%20<?php echo $row['uname']; ?>,%20I%20am%20interested%20in%20the%20property%20listing%20(<?php echo $row['2']; ?>)%20you%20posted on Exclusive Kasi Living.%20Can%20you%20provide%20more%20information?"
                                class="btn btn-primary">
                                <i class="fab fa-whatsapp"></i> Send WhatsApp
                            </a>

                            <div class="mt-3 table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>Rent:</td>
                                            <td class="text-capitalize">R<?php echo $row['16'];?></td>
                                            <td>Location:</td>
                                            <td class="text-capitalize"><?php echo $row['17'] . ', ' . $row['18']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rent Per:</td>
                                            <td class="text-capitalize"><?php echo $row['9'];?></td>
                                            <td>Posted By:</td>
                                            <td class="text-capitalize"><?php echo $row['uname'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Deposit Is:</td>
                                            <td class="text-capitalize">R<?php echo $row['8'];?></td>
                                            <td>Date Posted:</td>
                                            <!-- <td class="text-capitalize"><?php echo $row['33'];?></td> -->
                                            <td class="text-capitalize">
                                                <?php $date = date("Y-m-d", strtotime($row['33'])); echo $date;?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <h4 class="text-secondary my-4">Main Features</h4>
                            <div class="property-details">
                                <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                    <ul>
                                        <li><span class="text-secondary"><?php echo $row['15'];?></span>Square Meters</li>
                                        <li><span class="text-secondary"><?php echo $row['7'];?></span>Room(s)</li>
                                        <!-- <li><span class="text-secondary">R<?php echo $row['13'];?></span> Rent <?php echo $row['15'];?></li> -->
                                        <li><span class="text-secondary">R<?php echo $row['16'];?></span>Rent</li>
                                        <li><span class="text-secondary">R<?php echo $row['8'];?></span>Deposit</li>
                                        <!-- <li><span class="text-secondary"><?php echo $row['9'];?></span>Per</li> -->
                                        <li><span class="text-secondary"><?php echo $row['1'];?></span>Reference ID</li>
                                        <li><span class="text-secondary"><?php echo $row['uphone'];?></span>Contact Number</li>
                                        <!-- <li><span class="text-secondary"><?php echo $row['7'];?></span> Bathroom</li>
                                        <li><span class="text-secondary"><?php echo $row['8'];?></span> Balcony</li>
                                        <li><span class="text-secondary"><?php echo $row['9'];?></span> Kitchen</li> -->
                                    </ul>
                                </div>
                                <h4 class="text-secondary my-4">Description</h4>
                                <p><?php echo $row['3'];?></p>

                                <h5 class="mt-5 mb-4 text-secondary">Property Summary</h5>
                                <div class="table-striped font-14 pb-2">
                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td>Property Type:</td>
                                                <td class="text-capitalize"><?php echo $row['4'];?></td>
                                                <td>Listing Type:</td>
                                                <td class="text-capitalize"><?php echo $row['6'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Status:</td>
                                                <td class="text-capitalize"><?php echo $row['27'];?></td>
                                                <td>Move In:</td>
                                                <td class="text-capitalize"><?php echo $row['32'];?></td>
                                            </tr>
                                            <tr>
                                                <td>City:</td>
                                                <td class="text-capitalize"><?php echo $row['18'];?></td>
                                                <td>Province Is:</td>
                                                <td class="text-capitalize"><?php echo $row['19'];?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>


                            <!-- <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contact Agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-primary text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-primary">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <form class="bg-gray-form mt-5" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="name" name="firstname" placeholder="Name" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="email" name="email" placeholder="Email" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input class="form-control bg-gray" id="phone" name="phone" placeholder="Phone" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit" id="send" value="submit" class="btn btn-primary">Send Message</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-12 col-lg-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control bg-gray mt-sm-20" id="massage" name="massage" cols="30" rows="7" placeholder="Massage"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->


                                <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <div class="checkbox-group">
                                            <div class="row" style="width: 50rem">
                                                <div class="col-md-3 mb-4 mb-md-0">
                                                    <!-- Add the "mb-4 mb-md-0" class -->
                                                    <h6>Security</h6>
                                                    <?php
                                                    $securityFeatures = ['CCTV Surveillance', 'Gated Community', 'Fenced Property', 'Fire Alarm System', '24/7 Security Staff', 'Intercom Facility', 'Access Control System', 'Security Cameras'];
                                                    $features = explode(", ", $row['feature']);
                                                    $securitySelected = array_intersect($securityFeatures, $features);
                                                    if (!empty($securitySelected)) {
                                                        echo '<ul>';
                                                        foreach ($securitySelected as $feature) {
                                                            echo '<li>' . htmlspecialchars($feature) . '</li>';
                                                        }
                                                        echo '</ul>';
                                                    } else {
                                                        echo '<p>No added features.</p>';
                                                    }
                                                    ?>
                                                </div>

                                                <div class="col-md-3 mb-4 mb-md-0">
                                                    <!-- Add the "mb-4 mb-md-0" class -->
                                                    <h6>Facilities</h6>
                                                    <?php
                                                    $facilitiesFeatures = ['Clubhouse', 'Parking', 'Covered Parking', 'Laundry', 'Pet Friendly', 'Handicap Available', 'Water', 'Solar', 'Fixed Electricity', 'Prepaid Electricity', 'Backup Generator', 'Backup Water', 'Ensuite Bathroom', 'Stove', 'Shower'];
                                                    $facilitiesSelected = array_intersect($facilitiesFeatures, $features);
                                                    if (!empty($facilitiesSelected)) {
                                                        echo '<ul>';
                                                        foreach ($facilitiesSelected as $feature) {
                                                            echo '<li>' . htmlspecialchars($feature) . '</li>';
                                                        }
                                                        echo '</ul>';
                                                    } else {
                                                        echo '<p>No added features.</p>';
                                                    }
                                                    ?>
                                                </div>

                                                <div class="col-md-3 mb-4 mb-md-0">
                                                    <!-- No change to the third column -->
                                                    <h6>Features & Fittings</h6>
                                                    <?php
                                                    $featuresFittingsFeatures = ['Kitchen', 'Aircon', 'Heating', 'Balcony', 'Built-in Braai', 'Built-in Cupboards', 'WiFi', 'Furnished', 'Garden', 'Outside Sink', 'Satellite', 'Dishwasher', 'Microwave', 'Oven', 'Fridge'];
                                                    $featuresFittingsSelected = array_intersect($featuresFittingsFeatures, $features);
                                                    if (!empty($featuresFittingsSelected)) {
                                                        echo '<ul>';
                                                        foreach ($featuresFittingsSelected as $feature) {
                                                            echo '<li>' . htmlspecialchars($feature) . '</li>';
                                                        }
                                                        echo '</ul>';
                                                    } else {
                                                        echo '<p>No added features.</p>';
                                                    }
                                                    ?>
                                                </div>

                                                <div class="col-md-3 mb-4 mb-md-0">
                                                    <!-- No change to the third column -->
                                                    <h6>Nearby Facilities</h6>
                                                    <?php
                                                    $recreationalFeatures = ['Swimming Pool', 'Tennis Court', 'Playground', 'Golf Course', 'Pet Park', 'Recreational Park', 'Mall', 'Shopping Center', 'Spazas', 'Schools', 'Police Station', 'Library', 'Bus Stop (Rea Vaya)', 'Taxi Rank', 'Train Station'];
                                                    $recreationalSelected = array_intersect($recreationalFeatures, $features);
                                                    if (!empty($recreationalSelected)) {
                                                        echo '<ul>';
                                                        foreach ($recreationalSelected as $feature) {
                                                            echo '<li>' . htmlspecialchars($feature) . '</li>';
                                                        }
                                                        echo '</ul>';
                                                    } else {
                                                        echo '<p>No added features.</p>';
                                                    }
                                                    ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>








                                <!-- <h5 class="mt-5 mb-4 text-secondary">Floor Plans</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Floor Plans </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['25'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Basement Floor</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['26'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-primary hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Ground Floor</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="admin/property/<?php echo $row['27'];?>" alt="Not Available"> </div>
                            </div> -->

                                <!-- <div class="text-center d-sm-flex flex-sm-column">
                                    <h5
                                        class="mt-5 mb-4 text-secondary double-down-line-left text-center text-lg-left">
                                        Contact Agent</h5>
                                    <div class="agent-contact pt-60">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-4 col-lg-3">
                                                <h5 class="hide-on-desktop"> Contact Agent</h5>
                                                <img src="admin/user/<?php echo $row['uimage']; ?>" alt=""
                                                    style="width: 170px; height: 200px;" width="170">
                                            </div>
                                            <div class="col-sm-8 col-lg-9">
                                                <div class="agent-data text-ordinary mt-sm-20">
                                                    <h6 class="text-primary text-capitalize"><?php echo $row['uname'];?>
                                                    </h6>
                                                    <ul class="mb-3">
                                                        <li><?php echo $row['uphone'];?></li>
                                                        <li><?php echo $row['uemail'];?></li>
                                                    </ul>
                                                    <div class="mt-3 text-secondary hover-text-primary text-center">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-3"><a href="#"><i
                                                                        class="fab fa-facebook-f"></i></a></li>
                                                            <li class="d-inline-block mr-3"><a href="#"><i
                                                                        class="fab fa-twitter"></i></a></li>
                                                            <li class="d-inline-block mr-3"><a href="#"><i
                                                                        class="fab fa-google-plus-g"></i></a></li>
                                                            <li class="d-inline-block mr-3"><a href="#"><i
                                                                        class="fab fa-linkedin-in"></i></a></li>
                                                            <li class="d-inline-block mr-3"><a href="#"><i
                                                                        class="fas fa-rss"></i></a></li>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div> 
                                            <div class="col-md-12 col-lg-12">
                                                <form class="bg-gray-form mt-5" action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control bg-gray" id="name"
                                                                            name="firstname" placeholder="Name"
                                                                            type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control bg-gray" id="email"
                                                                            name="email" placeholder="Email"
                                                                            type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control bg-gray" id="phone"
                                                                            name="phone" placeholder="Phone"
                                                                            type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button type="submit" id="send" value="submit"
                                                                        class="btn btn-primary">Send Message</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <div class="row">
                                                                <div class="col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control bg-gray mt-sm-20"
                                                                            id="massage" name="massage" cols="30"
                                                                            rows="7" placeholder="Massage"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>

                        <?php } ?>

                        <div class="col-lg-4">
                            <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-md-50">Send
                                Message</h4>
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="w-100" action="#" method="post">
                                            <div class="d-inline-block w-100">
                                                <div class="row mb-6">
                                                    <div class="col-lg-12">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Your Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" name="email" class="form-control"
                                                                placeholder="Email Address*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" name="phone" class="form-control"
                                                                placeholder="Phone" maxlength="10">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <input type="text" name="subject" class="form-control"
                                                            placeholder="Subject">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group input-group mb-2 mr-sm-2">
                                                            <textarea name="message" class="form-control" rows="5"
                                                                placeholder="Type Comments..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" value="send message" name="send"
                                                    class="btn btn-primary">Send Message</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form> -->


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
                                            <label for="stype">For Rent or Sale:</label>
                                            <input type="text" name="stype" id="stype" class="form-control"
                                                placeholder="Rent or Sale">
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
                                <li> <img src="admin/property/<?php echo $row['20'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-primary text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
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
                                    <li> <img src="admin/property/<?php echo $row['21'];?>" alt="pimage"
                                            style="width: 80px; height: 53.33px; object-fit: cover;">
                                        <h6 class="text-secondary hover-text-primary text-capitalize"><a
                                                href="propertydetail.php?pid=<?php echo $row[''];?>"><?php echo $row['2'];?></a>
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