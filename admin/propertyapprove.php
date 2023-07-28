<?php
include("config.php");

// Update properties where approved is 0 to 1
$sql = "UPDATE property SET approved = 1 WHERE approved = 0";
$result = mysqli_query($con, $sql);

if ($result) {
    $msg = "Properties Approved Successfully!";
} else {
    $msg = "Failed to Approve Properties: " . mysqli_error($con);
}

// Redirect back to the propertyview.php page with a success or failure message
header("location: propertyview.php?msg=" . urlencode($msg));
exit();
?>
