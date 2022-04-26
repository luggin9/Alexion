<?php
session_start();
// If the user is not logged in redirect to the login page...
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'Marty';
$DATABASE_PASS = 'Potter1123';
$DATABASE_NAME = 'nba';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

