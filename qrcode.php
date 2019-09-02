<?php
    session_start();
    include 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>qrcode</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="qrcode_body">

	<?php
        $ran = rand(10000, 99999);   
        $url = "attendance.php?random=".$ran."?name=".$_SESSION['username']."?code=".$_GET['code']."?sec=".$_GET['sec'];
    ?>
    <!-- <a href="backend/log_out.php">Log Out</a> -->
    <div class="qrcontainer">
    	<img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo $url?>" alt="qrcode">
	</div>

</body>
</html>