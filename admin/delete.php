<?php
// include database connection file
include_once("../assets/data/umconfig.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result2 = mysqli_query($mysqli2, "DELETE FROM event WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:registrants.php");
?>