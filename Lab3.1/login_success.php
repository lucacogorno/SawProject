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
$passwordIns = trim($_POST ["lpsw"]);
$stmt = $conn->prepare ( "SELECT password FROM users_creds WHERE username = ?" );
$stmt->bind_param ( "s", $usernameIns );
$stmt->execute ();
$stmt->bind_result($passwordRec);
$stmt->store_result();

if ($stmt->num_rows == 1) {
	$stmt->fetch();
	if(password_verify($passwordIns, $passwordRec))
	{
	session_start();
	$_SESSION ['username'] = $usernameIns;
	if (!empty($_POST ["cbox"])) {
		setcookie ( "loginCookie", $usernameIns, time () + (86400 * 30), "/" );			
	}
	header ( 'Location:index1.php' );
	}
}else{
echo "non loggato";
echo $passwordIns;
}

$stmt->close ();
?>