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
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="logo">
		<img  src="logo.svg" alt="Logo" width="50px">
	</div>
	<div class="name">
		Sexy
		Name
	</div>
	<div class="about">
		Doo dood odood odood
	</div>

    <form class="form" action="backend/login_student.php" method="POST">
    	
        <input class="login" type="text" name="roll" placeholder="Login ID">
  
        <input class="pass" type="password" name="password" placeholder="Password">
        <br>
        <button class="lbutton" type="submit" name="login">Log In</button>
    </form>
	
</body>
</html>