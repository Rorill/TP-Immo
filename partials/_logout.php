<?php
session_start();
session_destroy(); 
$_SESSION['isLoggedIn'] = false;
header('Location: /index.php');
exit;