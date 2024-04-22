<?php session_start();
if($_SESSION['isLoggedIn'] = true && $_SESSION['user'] != null) {
   echo  '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/mobile.css" rel="mobile" />
    <title>Document</title>
</head>
<body>';
     include '../partials/_header.php';
     include '../partials/Listings/_form.php';
     include '../partials/_footer.php';
    echo '
</body>
</html>
?>';
    }
else {
    echo "Permission Denied";
    exit;

} ?>
