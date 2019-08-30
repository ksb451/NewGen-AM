<?php
    session_start();
    include 'includes/db_connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher login</title>
</head>
<body>
    <form action="backend/login_student.php" method="POST">
        <input type="text" name="roll" placeholder="Roll no...">
        <input type="password" name="password" placeholder="Password...">
        <button type="submit" name="login">Log In</button>
    </form>
</body>
</html>