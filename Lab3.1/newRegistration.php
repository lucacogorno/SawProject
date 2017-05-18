<?php

// Your database info 
$db_host = 'localhost';
$db_user = 'S4110217';
$db_pass = 'pasSaw';
$db_name = 'S4110217';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users_creds (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

// set parameters and execute
//POST data
$username = trim($_POST['uname']);
$email = trim($_POST['email']);
$password = password_hash(trim($_POST['psw']), PASSWORD_DEFAULT);
$stmt->execute();


$stmt->close();
$conn->close();

header('Location:index.php');
?>