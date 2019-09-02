<?php
    session_start();
    include 'includes/db_connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="studentBody">
	<div class="logo">
<<<<<<< HEAD
        <span class="logo_img"><img  src="logo.svg" alt="Logo" width="50px"></span>
        <span class="product">
            ASISTENCIA
        </span>
=======
		<img  src="logo.svg" alt="Logo" width="50px">
	</div>
	<div class="name">
		Student Login
	</div>
	<div class="about">
		Welcome back
>>>>>>> 05edfc1fe1c09447fca563efee8503c2068505e1
	</div>
    
    <div class="form-box">
        <div class="head">
            Student Login
        </div>
        <div class="about">
            Welcome back
        </div>

        <form class="form" action="backend/login_student.php" method="POST">
            <div class="email">
                <input class="active" type="text" name="roll" placeholder="Login ID">
            </div>
            <div class="password">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button class="lbutton" type="submit" name="login">Log In</button>
        </form>
    </div>
        

</body>
</html>