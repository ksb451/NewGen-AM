<?php
    session_start();
    include 'includes/db_connect.php';
?>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $ran = rand(10000, 99999);   
        $url = "attendance.php?random=".$ran."?name=".$_SESSION['name'];
    ?>
    <a href="backend/log_out.php">Log Out</a>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $url?>" alt="qrcode">
</body>
</html>