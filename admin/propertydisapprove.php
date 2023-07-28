<?php
include("config.php");

// Update properties where approved is 0 to 1
$sql = "UPDATE property SET approved = 0 WHERE approved = 1";
$result = mysqli_query($con, $sql);

if ($result) {
    $msg = "Properties Disapproved Successfully!";
} else {
    $msg = "Failed to Disapproved Properties: " . mysqli_error($con);
}

// Redirect back to the propertyview.php page with a success or failure message
header("location: propertyview.php?msg=" . urlencode($msg));
exit();
?>
