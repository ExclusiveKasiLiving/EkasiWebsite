<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code

$msg="";
if(isset($_POST['add']))
{
	$pid=$_REQUEST['id'];
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$bhk=$_POST['bhk'];
	$bed=$_POST['bed'];
    $deposit=$_POST['deposit'];
	$per=$_POST['per'];
	$balc=$_POST['balc'];
	$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	$bath=$_POST['bath'];
	$kitc=$_POST['kitc'];
	$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
    $state=$_POST['state'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$status=$_POST['status'];
    $availabledate=$_POST['availabledate'];
	$uid=$_SESSION['uid'];
	$feature = "";

	if (isset($_POST['add'])) {
        // Your existing code...
    
        $selectedFeatures = isset($_POST['feature']) ? $_POST['feature'] : [];
        $feature = implode(', ', $selectedFeatures);
    
        // Your existing code...
    }
	
	$totalfloor=$_POST['totalfl'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	$fimage=$_FILES['fimage']['name'];
	$fimage1=$_FILES['fimage1']['name'];
	$fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	$temp_name5 =$_FILES['fimage']['tmp_name'];
	$temp_name6 =$_FILES['fimage1']['tmp_name'];
	$temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	move_uploaded_file($temp_name5,"admin/property/$fimage");
	move_uploaded_file($temp_name6,"admin/property/$fimage1");
	move_uploaded_file($temp_name7,"admin/property/$fimage2");
	
	
$sql = "UPDATE property SET 
	title = '$title',
	pcontent = '$content',
	type = '$ptype',
	bhk = '$bhk',
	stype = '$stype',
	bedroom = '$bed',
    deposit = '$deposit',
    per = '$per',
	bathroom = '$bath',
	balcony = '$balc',
	kitchen = '$kitc',
	hall = '$hall',
	floor = '$floor',
	size = '$asize',
	price = '$price',
	location = '$loc',
	city = '$city',
	state = '$state',
	feature = '$feature',
	pimage = '$aimage',
	pimage1 = '$aimage1',
	pimage2 = '$aimage2',
	pimage3 = '$aimage3',
	pimage4 = '$aimage4',
	uid = '$uid',
	status = '$status',
	availabledate = '$availabledate',
	totalfloor = '$totalfloor',
    feature = '$feature'
	WHERE pid = $pid";

	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Property Updated</p>";
		header("Location:feature.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Property Not Updated</p>";
		header("Location:feature.php?msg=$msg");
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
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!--	Title
	=========================================================-->
    <title>Exclusive Kasi Living - Submit Property Update</title>
</head>

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
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Submit Property</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->


            <!--	Submit property   -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
                    </div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">

                            <?php
									
									$pid=$_REQUEST['id'];
									$query=mysqli_query($con,"select * from property where pid='$pid'");
									while($row=mysqli_fetch_row($query))
									{
								?>

                            <div class="description">
                                <h5 class="text-secondary">Basic Information</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="title" required
                                                    value="<?php echo $row['2']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Content</label>
                                            <div class="col-lg-9">
                                                <textarea class="tinymce form-control" name="content" rows="10"
                                                    cols="30" contenteditable><?php echo $row['3']; ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Property Type</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="ptype">
                                                    <option value="" disabled>Select Property Type</option>
                                                    <option value="Apartment"
                                                        <?php if ($row['4'] === "Apartment") echo "selected"; ?>>
                                                        Apartment</option>
                                                    <option value="Room"
                                                        <?php if ($row['4'] === "Room") echo "selected"; ?>>Room
                                                    </option>
                                                    <option value="Back Room Normal"
                                                        <?php if ($row['4'] === "Back Room Normal") echo "selected"; ?>>
                                                        Back Room (Normal)</option>
                                                    <option value="Back Room Garage"
                                                        <?php if ($row['4'] === "Back Room Garage") echo "selected"; ?>>
                                                        Back Room (Garage)</option>
                                                    <option value="Flat"
                                                        <?php if ($row['4'] === "Flat") echo "selected"; ?>>Flat
                                                    </option>
                                                    <option value="House"
                                                        <?php if ($row['4'] === "House") echo "selected"; ?>>House
                                                    </option>
                                                    <option value="Bachelor"
                                                        <?php if ($row['4'] === "Bachelor") echo "selected"; ?>>Bachelor
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Selling Type</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="stype">
                                                    <option value="" disabled>Select Status</option>
                                                    <option value="Rent"
                                                        <?php if ($row['6'] === "Rent") echo "selected"; ?>>Rent
                                                    </option>
                                                    <option value="Sale"
                                                        <?php if ($row['6'] === "Sale") echo "selected"; ?>>Sale
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Bedroom</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="bed">
                                                    <option value="" name="">Bedroom</option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">1
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">2
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">3
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">4
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">5
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">6
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">7
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">8
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">9
                                                    </option>
                                                    <option name="bed" required value="<?php echo $row['6']; ?>">10
                                                    </option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Bedroom</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="bed">
                                                    <option value="">Select Bedroom</option>
                                                    <option required value="0"
                                                        <?php if ($row['7'] === "0") echo "selected"; ?>>0 (Open Plan)
                                                    </option>
                                                    <option required value="1"
                                                        <?php if ($row['7'] === "1") echo "selected"; ?>>1</option>
                                                    <option required value="2"
                                                        <?php if ($row['7'] === "2") echo "selected"; ?>>2</option>
                                                    <option required value="3"
                                                        <?php if ($row['7'] === "3") echo "selected"; ?>>3</option>
                                                    <option required value="4"
                                                        <?php if ($row['7'] === "4") echo "selected"; ?>>4</option>
                                                    <option required value="5"
                                                        <?php if ($row['7'] === "5") echo "selected"; ?>>5</option>
                                                    <option required value="6"
                                                        <?php if ($row['7'] === "6") echo "selected"; ?>>6</option>
                                                    <option required value="7"
                                                        <?php if ($row['7'] === "7") echo "selected"; ?>>7</option>
                                                    <option required value="8"
                                                        <?php if ($row['7'] === "8") echo "selected"; ?>>8</option>
                                                    <option required value="9"
                                                        <?php if ($row['7'] === "9") echo "selected"; ?>>9</option>
                                                    <option required value="10"
                                                        <?php if ($row['7'] === "10") echo "selected"; ?>>10</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Area Size</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="asize" required
                                                    placeholder="Enter Area Size (in square meters)"
                                                    value="<?php echo $row['15']; ?>">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Balcony</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="balc">
                                                    <option value="" name="">Select Balcony</option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">1
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">2
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">3
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">4
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">5
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">6
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">7
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">8
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">9
                                                    </option>
                                                    <option name="balc" required value="<?php echo $row['8']; ?>">10
                                                    </option>
                                                </select>
                                            </div>
                                        </div> -->


                                        <!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Hall</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="hall" required value="<?php echo $row['10']; ?>">
													</div>
												</div> -->
                                    </div>
                                </div>
                                <h5 class="text-secondary">Price & Location</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="floor">
															<option value="">Select Floor</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="price" required
                                                    value="<?php echo $row['16']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Per</label>

                                            <div class="col-lg-9">
                                                <select class="form-control" name="per" required>
                                                    <option>Select Per</option>
                                                    <option value="Per Month"
                                                        <?php if ($row['9'] === "Per Month") echo "selected"; ?>>Per
                                                        Month</option>
                                                    <option value="Per 2 Week"
                                                        <?php if ($row['9'] === "Per 2 Week") echo "selected"; ?>>Per 2
                                                        Week</option>
                                                    <option value="Per Week"
                                                        <?php if ($row['9'] === "Per Week") echo "selected"; ?>>Per Week
                                                    </option>
                                                    <option value="Per Day"
                                                        <?php if ($row['9'] === "Per Day") echo "selected"; ?>>Per Day
                                                    </option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Deposit</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="deposit" required
                                                    value="<?php echo $row['8']; ?>">
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="loc" required
                                                    value="<?php echo $row['16']; ?>">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Province</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="state" required
                                                    value="<?php echo $row['19']; ?>" required
                                                    onchange="populateCities(this)">
                                                    <option value="">Select Province</option>
                                                    <option value="Eastern Cape" name="state">Eastern Cape</option>
                                                    <option value="Free State" name="state">Free State</option>
                                                    <option value="Gauteng" name="state">Gauteng</option>
                                                    <option value="KwaZulu-Natal" name="state">KwaZulu-Natal</option>
                                                    <option value="Limpopo" name="state">Limpopo</option>
                                                    <option value="Mpumalanga" name="state">Mpumalanga</option>
                                                    <option value="North West" name="state">North West</option>
                                                    <option value="Northern Cape" name="state">Northern Cape</option>
                                                    <option value="Western Cape" name="state">Western Cape</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="city" required
                                                    value="<?php echo $row['18']; ?>" required>
                                                    <option value="">Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="loc" required
                                                    value="<?php echo $row['17']; ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <h5 class="text-secondary">Features</h5>
                                <hr>


                                <style>
                                .form-check-input[type="checkbox"] {
                                    width: 16px;
                                    height: 28px;
                                    margin-right: 10px;
                                    margin-top: 5px;
                                    /* Add some margin at the top to separate checkbox and label */
                                }

                                .form-check-input:checked[type="checkbox"] {
                                    background-color: #007bff;
                                    border-color: #007bff;
                                }

                                .form-check-input:checked[type="checkbox"]::before {
                                    content: "\2713";
                                    display: block;
                                    color: #fff;
                                    font-size: 1.2em;
                                    line-height: 30px;
                                    text-align: center;
                                }

                                .checkbox-group {
                                    padding-top: 10px;
                                }

                                .checkbox-group h6 {
                                    margin-bottom: 10px;
                                }

                                .checkbox-group .form-check {
                                    margin-bottom: 10px;
                                }

                                .form-check-label {
                                    padding-top: 5px;
                                    /* Add some padding at the top to separate label from checkbox */
                                }
                                </style>


                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="security-checkbox">Extra
                                        Features</label>
                                    <div class="col-lg-10">
                                        <div class="checkbox-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6>Security</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="security-checkbox" name="feature[]"
                                                            value="CCTV Surveillance">
                                                        <label class="form-check-label" for="security-checkbox">CCTV
                                                            Surveillance</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="gated-checkbox" name="feature[]"
                                                            value="Gated Community">
                                                        <label class="form-check-label" for="gated-checkbox">Gated
                                                            Property</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="fenced-checkbox" name="feature[]"
                                                            value="Fenced Property">
                                                        <label class="form-check-label" for="fenced-checkbox">Fenced
                                                            Property</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="fire-alarm-checkbox" name="feature[]"
                                                            value="Fire Alarm System">
                                                        <label class="form-check-label" for="fire-alarm-checkbox">Fire
                                                            Alarm System</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="security-staff-checkbox" name="feature[]"
                                                            value="24/7 Security Staff">
                                                        <label class="form-check-label"
                                                            for="security-staff-checkbox">24/7 Security Staff</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="intercom-checkbox" name="feature[]"
                                                            value="Intercom Facility">
                                                        <label class="form-check-label" for="intercom-checkbox">Intercom
                                                            Facility</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="access-control-checkbox" name="feature[]"
                                                            value="Access Control System">
                                                        <label class="form-check-label"
                                                            for="access-control-checkbox">Access Control System</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="security-cameras-checkbox" name="feature[]"
                                                            value="Security Cameras">
                                                        <label class="form-check-label"
                                                            for="security-cameras-checkbox">Security Cameras</label>
                                                    </div>
                                                    <!-- Add more security-related checkboxes here -->
                                                </div>



                                                <div class="col-md-3">
                                                    <h6>Facilities</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="clubhouse-checkbox" name="feature[]" value="Clubhouse">
                                                        <label class="form-check-label"
                                                            for="clubhouse-checkbox">Clubhouse</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="parking-checkbox" name="feature[]" value="Parking">
                                                        <label class="form-check-label"
                                                            for="parking-checkbox">Parking</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="covered-parking-checkbox" name="feature[]"
                                                            value="Covered Parking">
                                                        <label class="form-check-label"
                                                            for="covered-parking-checkbox">Covered Parking</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="laundry-checkbox" name="feature[]" value="Laundry">
                                                        <label class="form-check-label"
                                                            for="laundry-checkbox">Laundry</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="pet-friendly-checkbox" name="feature[]"
                                                            value="Pet Friendly">
                                                        <label class="form-check-label" for="pet-friendly-checkbox">Pet
                                                            Friendly</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="handicap-checkbox" name="feature[]"
                                                            value="Handicap Available">
                                                        <label class="form-check-label" for="handicap-checkbox">Handicap
                                                            Available</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="water-checkbox" name="feature[]" value="Water">
                                                        <label class="form-check-label"
                                                            for="water-checkbox">Water</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="solar-checkbox" name="feature[]" value="Solar">
                                                        <label class="form-check-label"
                                                            for="solar-checkbox">Solar</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="fixed-electricity-checkbox" name="feature[]"
                                                            value="Fixed Electricity">
                                                        <label class="form-check-label"
                                                            for="fixed-electricity-checkbox">Fixed Electricity</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="prepaid-electricity-checkbox" name="feature[]"
                                                            value="Prepaid Electricity">
                                                        <label class="form-check-label"
                                                            for="prepaid-electricity-checkbox">Prepaid
                                                            Electricity</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="backup-generator-checkbox" name="feature[]"
                                                            value="Backup Generator">
                                                        <label class="form-check-label"
                                                            for="backup-generator-checkbox">Backup Generator</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="backup-water-checkbox" name="feature[]"
                                                            value="Backup Water">
                                                        <label class="form-check-label"
                                                            for="backup-water-checkbox">Backup Water</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="ensuite-bathroom-checkbox" name="feature[]"
                                                            value="Ensuite Bathroom">
                                                        <label class="form-check-label"
                                                            for="ensuite-bathroom-checkbox">Ensuite Bathroom</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="stove-checkbox" name="feature[]" value="Stove">
                                                        <label class="form-check-label"
                                                            for="stove-checkbox">Stove</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="shower-checkbox" name="feature[]" value="Shower">
                                                        <label class="form-check-label"
                                                            for="shower-checkbox">Shower</label>
                                                    </div>
                                                    <!-- Add more facility-related checkboxes here -->
                                                </div>

                                                <div class="col-md-3">
                                                    <h6>Features & Fittings</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="kitchen-checkbox" name="feature[]" value="Kitchen">
                                                        <label class="form-check-label"
                                                            for="kitchen-checkbox">Kitchen</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="aircon-checkbox" name="feature[]" value="Aircon">
                                                        <label class="form-check-label"
                                                            for="aircon-checkbox">Aircon</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="heating-checkbox" name="feature[]" value="Heating">
                                                        <label class="form-check-label"
                                                            for="heating-checkbox">Heating</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="balcony-checkbox" name="feature[]" value="Balcony">
                                                        <label class="form-check-label"
                                                            for="balcony-checkbox">Balcony</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="braai-checkbox" name="feature[]" value="Built-in Braai">
                                                        <label class="form-check-label" for="braai-checkbox">Built-in
                                                            Braai</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="cupboard-checkbox" name="feature[]"
                                                            value="Built-in Cupboard">
                                                        <label class="form-check-label" for="cupboard-checkbox">Built-in
                                                            Cupboard</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="wifi-checkbox" name="feature[]" value="WiFi">
                                                        <label class="form-check-label" for="wifi-checkbox">WiFi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="furnished-checkbox" name="feature[]" value="Furnished">
                                                        <label class="form-check-label"
                                                            for="furnished-checkbox">Furnished</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="garden-checkbox" name="feature[]" value="Garden">
                                                        <label class="form-check-label"
                                                            for="garden-checkbox">Garden</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="sink-checkbox" name="feature[]" value="Outside Sink">
                                                        <label class="form-check-label" for="sink-checkbox">Outside
                                                            Sink</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="satellite-tv-checkbox" name="feature[]"
                                                            value="Satellite TV">
                                                        <label class="form-check-label"
                                                            for="satellite-tv-checkbox">Satellite TV</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dishwasher-checkbox" name="feature[]"
                                                            value="Dishwasher">
                                                        <label class="form-check-label"
                                                            for="dishwasher-checkbox">Dishwasher</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="microwave-checkbox" name="feature[]" value="Microwave">
                                                        <label class="form-check-label"
                                                            for="microwave-checkbox">Microwave</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="oven-checkbox" name="feature[]" value="Oven">
                                                        <label class="form-check-label" for="oven-checkbox">Oven</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="fridge-checkbox" name="feature[]" value="Fridge">
                                                        <label class="form-check-label"
                                                            for="fridge-checkbox">Fridge</label>
                                                    </div>
                                                    <!-- Add more feature & fitting-related checkboxes here -->
                                                </div>

                                                <div class="col-md-3">
                                                    <h6>Nearby Facilities</h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="gym-checkbox" name="feature[]" value="Gym">
                                                        <label class="form-check-label" for="gym-checkbox">Gym</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="pool-checkbox" name="feature[]" value="Swimming Pool">
                                                        <label class="form-check-label" for="pool-checkbox">Swimming
                                                            Pool</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="diski-checkbox" name="feature[]" value="Diski">
                                                        <label class="form-check-label"
                                                            for="diski-checkbox">Diski</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="playground-checkbox" name="feature[]"
                                                            value="Playground">
                                                        <label class="form-check-label"
                                                            for="playground-checkbox">Playground</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="tennis-court-checkbox" name="feature[]"
                                                            value="Tennis Court">
                                                        <label class="form-check-label"
                                                            for="tennis-court-checkbox">Tennis Court</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="pet-park-checkbox" name="feature[]" value="Pet Park">
                                                        <label class="form-check-label" for="pet-park-checkbox">Pet
                                                            Park</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="recreational-park-checkbox" name="feature[]"
                                                            value="Recreational Park">
                                                        <label class="form-check-label"
                                                            for="recreational-park-checkbox">Recreational Park</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="mall-checkbox" name="feature[]" value="Mall">
                                                        <label class="form-check-label" for="mall-checkbox">Mall</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="shopping-center-checkbox" name="feature[]"
                                                            value="Shopping Center">
                                                        <label class="form-check-label"
                                                            for="shopping-center-checkbox">Shopping Center</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="spazas-checkbox" name="feature[]" value="Fridge">
                                                        <label class="form-check-label"
                                                            for="spazas-checkbox">Spazas</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="schools-checkbox" name="feature[]" value="Fridge">
                                                        <label class="form-check-label"
                                                            for="schools-checkbox">Schools</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="police-checkbox" name="feature[]" value="Fridge">
                                                        <label class="form-check-label" for="police-checkbox">Police
                                                            Station</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="library-checkbox" name="feature[]" value="Fridge">
                                                        <label class="form-check-label"
                                                            for="library-checkbox">Library</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="taxirank-checkbox" name="feature[]" value="Taxi Rank">
                                                        <label class="form-check-label" for="taxirank-checkbox">Taxi
                                                            Rank</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="trainstation-checkbox" name="feature[]"
                                                            value="Train Station">
                                                        <label class="form-check-label"
                                                            for="trainstation-checkbox">Train Station</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="busstop-checkbox" name="feature[]"
                                                            value="Bus Stop (Rea Vaya)">
                                                        <label class="form-check-label" for="busstop-checkbox">Bus Stop
                                                            (Rea Vaya)</label>
                                                    </div>
                                                    <!-- Add more additional-related checkboxes here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <h5 class="text-secondary">Images</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 1</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage" type="file" required="">
                                                <!-- <img src="property/<?php echo $row['21'];?>" alt="pimage" height="150" width="180"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 3</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage2" type="file" required="">
                                                <!-- <img src="property/<?php echo $row['23'];?>" alt="pimage" height="150" width="180"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 5</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage4" type="file" required="">
                                                <!-- <img src="property/<?php echo $row['25'];?>" alt="pimage" height="150" width="180"> -->
                                            </div>
                                        </div>





                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="available">Available</option>
                                                    <option value="sold out">Sold Out</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
														<img src="property/<?php echo $row['26'];?>" alt="pimage" height="150" width="180">
													</div>
												</div> -->
                                    </div>


                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 2</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage1" type="file" required="">
                                                <!-- <img src="property/<?php echo $row['22'];?>" alt="pimage" height="150" width="180"> -->
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">image 4</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage3" type="file" required="">
                                                <!-- <img src="property/<?php echo $row['24'];?>" alt="pimage" height="150" width="180"> -->
                                            </div>
                                        </div>

                                        <!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
														<img src="property/<?php echo $row['25'];?>" alt="pimage" height="150" width="180">
													</div> -->
                                        <!-- </div> -->
                                        <!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
														<img src="property/<?php echo $row['27'];?>" alt="pimage" height="150" width="180">
													</div>
												</div> -->
                                    </div>
                                </div>

                                <h5 class="text-secondary">Status & Availability</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="available"
                                                        <?php if ($row['27'] === "available") echo "selected"; ?>>
                                                        Available</option>
                                                    <option value="sold out"
                                                        <?php if ($row['27'] === "sold out") echo "selected"; ?>>Sold
                                                        Out</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">When Available</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="availabledate" required
                                                    value="<?php echo $row['32']; ?>">
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <input type="submit" value="Submit" class="btn btn-primary" name="add"
                                    style="margin-left:200px;">

                            </div>
                        </form>

                        <?php
								} 
							?>
                    </div>
                </div>
            </div>
            <!--	Submit property   -->


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



    <script>
    function populateCities(selectElement) {
        var cities = {
            "Eastern Cape": ["Aliwal North", "Bhisho", "Butterworth", "Cradock", "Despatch", "East London",
                "Fort Beaufort", "Graaff-Reinet", "Grahamstown", "Joubertina", "King William's Town",
                "Kirkwood", "Mthatha", "Port Alfred", "Port Elizabeth", "Queenstown", "Somerset East",
                "Steynsburg", "Uitenhage"
            ],
            "Free State": ["Bethlehem", "Bloemfontein", "Bothaville", "Botshabelo", "Brandfort", "Bultfontein",
                "Clocolan", "Cornelia", "Dealesville", "Dewetsdorp", "Edenburg", "Ficksburg", "Frankfort",
                "Harrismith", "Heilbron", "Hennenman", "Hoopstad", "Koffiefontein", "Koppies", "Kroonstad",
                "Ladybrand", "Lindley", "Mangaung", "Parys", "Paul Roux", "Petrusburg", "Petrus Steyn",
                "Phuthaditjhaba",
                "Reitz", "Sasolburg", "Senekal", "Smithfield", "Springfontein", "Thaba 'Nchu", "Theunissen",
                "Trompsburg", "Ventersburg", "Viljoenskroon", "Virginia", "Vrede", "Vredefort", "Welkom",
                "Wepener", "Wesselsbron", "Winburg", "Zastron"
            ],
            "Gauteng": [
                "Alberton", "Alexandra", "Alrapark", "Atteridgeville", "Bedfordview", "Benoni",
                "Birchleigh", "Boksburg", "Bonaero Park", "Brakpan", "Braamfontein", "Bredell",
                "Broadacres", "Bronkhorstspruit", "Carletonville", "Centurion", "Chartwell",
                "Constantia Kloof", "Craigavon", "Crowthorne", "Cullinan", "Cyrildene", "Dalpark",
                "Daveyton", "Dawn Park", "Diepsloot", "Duduza", "Edenvale", "Eikenhof", "Ekurhuleni",
                "Eldorado Park", "Emmarentia", "Ennerdale", "Equestria", "Ferndale", "Florida",
                "Germiston", "Glen Austin", "Glen Marais", "Glenvista", "Grasmere", "Greenside",
                "Heidelberg", "Houghton", "Isando", "Ivory Park", "Jabulani", "Johannesburg",
                "Kagiso", "Katlehong", "Kempton Park", "Kensington", "Krugersdorp", "Kya Sands",
                "La Rochelle", "Lanseria", "Lenasia", "Lethabong", "Linden", "Lonehill", "Lyttelton",
                "Mabopane", "Mamelodi", "Meadowlands", "Melrose", "Melville", "Meyerton", "Midrand",
                "Midstream", "Modderfontein", "Mondeor", "Monument Park", "Moreleta Park", "Muldersdrift",
                "Nigel", "Northcliff", "Northmead", "Norwood", "Observatory", "Olivedale", "Orange Farm",
                "Parkhurst", "Parktown", "Parkview", "Pimville", "Pretoria", "Radiokop", "Randburg",
                "Randfontein", "Randhart", "Reiger Park", "Rietfontein", "Rivonia", "Robertsham",
                "Roodepoort", "Rosebank", "Ruimsig", "Sandton", "Savanna City", "Sebokeng", "Sharpeville",
                "Silver Lakes", "Soshanguve", "Soweto", "Springs", "Sunninghill", "Sunward Park",
                "Tembisa", "The Hill", "Thokoza", "Vaal Marina", "Vaal Oewer", "Valhalla", "Vanderbijlpark",
                "Vereeniging", "Vosloorus", "Waverley", "Weltevreden Park", "Westcliff", "Westonaria",
                "Witkoppen", "Witpoortjie", "Woodmead", "Zwartkop"
            ],

            "KwaZulu-Natal": [
                "Amajuba", "Amanzimtoti", "Ballito", "Bergville", "Bluff", "Cato Ridge", "Chatsworth",
                "Dannhauser", "Drakensberg", "Dundee", "Durban", "Empangeni", "Eshowe", "Estcourt",
                "Glenwood", "Greytown", "Hammarsdale", "Hibberdene", "Hillcrest", "Hilton", "Hluhluwe",
                "Howick", "Illovo Beach", "Inanda", "Isipingo", "Kingsburgh", "Kloof", "Kokstad",
                "KwaMashu", "La Lucia", "Ladysmith", "Margate", "Mkuze", "Mooi River", "Mount Edgecombe",
                "Mtunzini", "New Germany", "Newcastle", "North Coast", "Northdene", "Osizweni",
                "Palm Beach", "Phoenix", "Pinetown", "Pongola", "Port Edward", "Port Shepstone",
                "Queensburgh", "Ramsgate", "Richards Bay", "Salt Rock", "Scottburgh", "South Coast",
                "Stanger", "Tongaat", "Ulundi", "Umdloti", "Umgababa", "Umhlanga", "Umhlanga Rocks",
                "Umhlatuzana", "Umlazi", "Umtentweni", "Utrecht", "Vryheid", "Warner Beach", "Waterfall",
                "Westbrook", "Westville", "Winterton"
            ],

            "Limpopo": [
                "Bela-Bela", "Dendron", "Ellisras", "Ga-Kgapane", "Giyani", "Lebowakgomo", "Lephalale",
                "Louis Trichardt", "Makhado", "Marble Hall", "Modimolle", "Mokopane", "Musina", "Naboomspruit",
                "Nkowankowa", "Phalaborwa", "Polokwane", "Seshego", "Thabazimbi", "Thohoyandou", "Tzaneen",
                "Warmbaths"
            ],
            "Mpumalanga": [
                "Amersfoort", "Badplaas", "Balfour", "Barberton", "Bethal", "Carolina", "Delmas",
                "Dullstroom", "Emalahleni", "Ermelo", "Graskop", "Hazyview", "Komati", "Kriel", "Lydenburg",
                "Machadodorp", "Malelane", "Mbombela", "Middelburg", "Nelspruit", "Piet Retief", "Sabie",
                "Secunda", "Standerton", "Volksrust", "Waterval Boven", "Waterval Onder", "White River",
                "Witbank"
            ],
            "Mpumalanga": [
                "Amersfoort", "Badplaas", "Balfour", "Barberton", "Bethal", "Carolina", "Delmas",
                "Dullstroom", "Emalahleni", "Ermelo", "Graskop", "Hazyview", "Komati", "Kriel", "Lydenburg",
                "Machadodorp", "Malelane", "Mbombela", "Middelburg", "Nelspruit", "Piet Retief", "Sabie",
                "Secunda", "Standerton", "Volksrust", "Waterval Boven", "Waterval Onder", "White River",
                "Witbank"
            ],

            "Northern Cape": [
                "Barkly West", "Calvinia", "Carnarvon", "Colesberg", "De Aar", "Douglas", "Fraserburg",
                "Garies", "Hanover", "Hartswater", "Hopetown", "Jan Kempdorp", "Kakamas", "Kanoneiland",
                "Keimoes", "Kimberley", "Kuruman", "Lime Acres", "Loeriesfontein", "Mier", "Nieuwoudtville",
                "Pampierstad", "Petrusville", "Pofadder", "Port Nolloth", "Postmasburg", "Prieska",
                "Richmond", "Strydenburg", "Sutherland", "Upington", "Van Wyksvlei", "Victoria West",
                "Warrenton", "Williston"
            ],

            "Western Cape": [
                "Atlantis", "Bellville", "Bergvliet", "Bloubergstrand", "Blue Downs", "Brackenfell",
                "Cape Town", "Ceres", "Clanwilliam", "Constantia", "Delft", "Durbanville", "Fish Hoek",
                "Gansbaai", "George", "Goodwood", "Gordon's Bay", "Grabouw", "Hermanus", "Klapmuts",
                "Kleinmond", "Knysna", "Kuils River", "Ladismith", "Lamberts Bay", "Langebaan", "Lansdowne",
                "Malmesbury", "Melkbosstrand", "Milnerton", "Mitchells Plain", "Mossel Bay", "Muizenberg",
                "Noordhoek", "Oudtshoorn", "Paarl", "Parow", "Plettenberg Bay", "Riebeek-Kasteel",
                "Riversdale", "Robertson", "Rondebosch", "Saldanha", "Sea Point", "Simons Town",
                "Somerset West", "Stellenbosch", "Strand", "Strandfontein", "Swellendam", "Table View",
                "Tokai", "Tulbagh", "Wellington", "Wilderness", "Worcester", "Yzerfontein"
            ]
        };

        var citySelect = document.getElementsByName("city")[0];
        var selectedProvince = selectElement.value;

        // Clear existing options
        citySelect.innerHTML = '<option value="">Select City</option>';

        // Populate cities based on the selected province
        if (selectedProvince in cities) {
            var provinceCities = cities[selectedProvince];
            for (var i = 0; i < provinceCities.length; i++) {
                var option = document.createElement("option");
                option.text = provinceCities[i];
                option.value = provinceCities[i];
                citySelect.appendChild(option);
            }
        }
    }
    </script>



    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/init-tinymce.min.js"></script>
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