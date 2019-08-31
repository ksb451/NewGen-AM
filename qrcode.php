<?php
    session_start();
    include 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>qrcode</title>
</head>
<body>

	<?php
        $ran = rand(10000, 99999);   
        $url = "attendance.php?random=".$ran."?name=".$_SESSION['username']."?code=".$_GET['code']."?sec=".$_GET['sec'];
    ?>
    <a href="backend/log_out.php">Log Out</a>
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $url?>" alt="qrcode">

</body>
</html>