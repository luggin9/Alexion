<?php
session_start();
// Connection Information.
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'Marty';
$DATABASE_PASS = 'Potter1123';
$DATABASE_NAME = 'webinar';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['npi'], $_POST['firstname'], $_POST['lastname'], $_POST['specialty'], $_POST['email'], $_POST['event'], $_POST['phone'], $_POST['designation'])) {
    // Could not get the data that should have been sent.
    exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['firstname']) || empty($_POST['lastname'] || empty($_POST['specialty'] || empty($_POST['email'] || empty($_POST['event'] || empty($_POST['designation'])))))) {
    // One or more values are empty.
    exit('Please complete the registration form');
}
// We need to check if the account with that NPI exists.
if ($stmt = $con->prepare('SELECT id, npi, firstname, lastname FROM event WHERE id = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
    $stmt->bind_param('s', $_POST['id']);
    $stmt->execute();
    $stmt->store_result();
    // Store the result so we can check if the account exists in the database.
    if ($stmt->num_rows > 0) {
        // Username already exists
        echo 'Username exists, please choose another!';
    } else {
        // NPI and User doesnt exists, insert new registration
        if ($stmt = $con->prepare('INSERT INTO event (npi, firstname, lastname, specialty, email, event, phone, designation, optin) VALUES (?, ?, ?, ?, ?, ?,?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $stmt->bind_param('sssssssss', $_POST['npi'], $_POST['firstname'], $_POST['lastname'],  $_POST['specialty'], $_POST['email'], $_POST['event'], $_POST['phone'], $_POST['designation'], $_POST['optin'] );
            $stmt->execute();
            header('Location: thank-you.html');
        } else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
    }
    $stmt->close();
} else {
    // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
    echo 'Could not prepare statement!';
}
$con->close();
?>