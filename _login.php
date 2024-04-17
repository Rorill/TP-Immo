
<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST") {
$login = $_POST['identity'];
$password = $_POST['password'];
if($login === 'Guillaume' && $password === 'Fatah') {
    $_SESSION['user'] = $login;
    $_SESSION['isLoggedIn'] = true;
    header('Location: /comments.php');
}   
else {
    $_SESSION['user'] = $login;
    $_SESSION['isLoggedIn'] = false;
    if ($_SESSION['user'] != null) {echo "identifiants inccorects";}
} }
?>

<form action="/login.php" method="POST">
<label for="identity">Login :</label>
<input type="text" name="identity" id="identity">
<label for="password">Password :</label>
<input type="password" name="password" id="password">
<button type="submit">login</button>
</form>