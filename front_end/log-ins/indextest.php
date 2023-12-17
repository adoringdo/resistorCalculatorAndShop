<?php 

session_start();
include("connections.php");
include("functions.php");

$user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="log-out.php">Logout</a>
    <h1>index page</h1>
    <p>hello, <?php echo $user_data['username'];?></p>
</body>
</html>