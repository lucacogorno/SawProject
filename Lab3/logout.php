<?php
session_start();
setcookie("loginCookie", "", time() - 3600, "/");
session_unset();
session_destroy();
header('Location:index.php');
?>