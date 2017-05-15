<?php

// Your database info
$db_host = 'localhost';
$db_user = 'S4110217';
$db_pass = 'pasSaw';
$db_name = 'S4110217';

$conn = new mysqli ( $db_host, $db_user, $db_pass, $db_name );

// Check connection
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

$usernameIns = trim ( $_POST ["lname"] );
$passwordIns = md5 (trim($_POST ["lpsw"]));
$stmt = $conn->prepare ( "SELECT username, password FROM users_creds WHERE username = ? AND password=?" );
$stmt->bind_param ( "ss", $usernameIns, $passwordIns );
$stmt->execute ();
$stmt->store_result();

echo $stmt->num_rows;

if ($stmt->num_rows > 0) {
	echo $usernameIns;
	session_start();
	$_SESSION ['username'] = $usernameIns;
	if (!empty($_POST ["cbox"])) {
		setcookie ( "loginCookie", $usernameIns, time () + (86400 * 30), "/" );			
	}
	header ( 'Location:index1.php' );
}else{
echo "non loggato";
}
$stmt->fetch();
$stmt->close ();
?>