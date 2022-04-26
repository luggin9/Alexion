<?php
$stmt = $con->prepare('SELECT password, email, firstname, lastname, username, interests, skills, role, status FROM users WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $firstname, $lastname, $username, $interests, $skills, $role, $status );
$stmt->fetch();
$stmt->close();