<?php 
session_start();
require_once("./config/pdo.php");

if($_SERVER["REQUEST_METHOD"] === "POST") {
$login = $_POST['identity'];
$password = $_POST['password'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email AND password=:pass");
$stmt->bindValue(":email", $login, PDO::PARAM_STR);
$stmt->bindValue(":email", $login, PDO::PARAM_STR);
$stmt->execute();
    header('Location:   index.php');
}   
else {
    $_SESSION['user'] = $login;
    $_SESSION['isLoggedIn'] = false;
    if ($_SESSION['user'] != null) {echo "identifiants inccorects";}
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>
<body class="loginbody">
    


<form action="_login.php" method="POST" class="loginForm">
<label for="identity">mail :</label>
<input type="text" name="identity" id="identity">
<label for="password">Password :</label>
<input type="password" name="password" id="password">
<button type="submit">login</button>
</form>
</body>
</html>