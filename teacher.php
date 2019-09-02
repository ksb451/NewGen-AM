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
<body class="teacherBody">
    <div class="logo">
<<<<<<< HEAD
        <span class="logo_img"><img  src="logo.svg" alt="Logo" width="50px"></span>
        <span class="product">
            ASISTENCIA
        </span>
    </div>
    <div class="form-box">
        <div class="head">
            Teacher Login
        </div>
        <div class="about">
            Welcome back
        </div>

        <form class="form" action="backend/login_teacher.php" method="POST">
            <div class="email">
                <input class="active" type="text" name="email" placeholder="Email...">
            </div>            
            <div class="password">
                <input type="password" name="password" placeholder="Password...">
            </div>
            <button class="lbutton" type="submit" name="login">Log In</button>
        </form>
    </div>
=======
		<img  src="logo.svg" alt="Logo" width="50px">
	</div>
	<div class="name">
		Teacher Login
	</div>
	<div class="about">
		Welcome back
	</div>
    <form class="form" action="backend/login_teacher.php" method="POST">
        <input class="login" type="text" name="email" placeholder="Email...">
        <input class="pass" type="password" name="password" placeholder="Password...">
        <br>
        <button class="lbutton" type="submit" name="login">Log In</button>
    </form>
>>>>>>> 05edfc1fe1c09447fca563efee8503c2068505e1
</body>
</html>