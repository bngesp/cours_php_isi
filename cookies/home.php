<?php
    if (!isset($_COOKIE['user'])) {
       header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Home</h1>
    <h3>je suis la page home</h3>
    bienvenu <?=$_COOKIE['user'];?>
</body>
</html>