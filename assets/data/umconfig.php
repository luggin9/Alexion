<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'webinar';
$databaseUsername = 'Marty';
$databasePassword = 'Potter1123';

$mysqli2 = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$result2 = mysqli_query($mysqli2, "SELECT * FROM event ORDER BY id DESC");
?>