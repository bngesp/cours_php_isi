<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
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
<h1>Page home</h1>

Bienvenu <?= $_SESSION["login"];?>
    
</body>
</html>
