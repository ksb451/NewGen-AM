<?php
    session_start();
    include 'includes/db_connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
</head>
<body>
    <?php
        $roll=$_SESSION['roll'];
        $roll1=strtolower($roll);
        $command = escapeshellcmd('sudo python3 ./finally.py '.$roll1);
        $output= shell_exec($command);
        echo $output;
        //$output = shell_exec($command);
        //echo $return_var;
        // function exec_enabled() {
        //     $disabled = explode(',',ini_get("disable_functions"));
        //     return !in_array("exec",$disabled);
        // }
        // echo exec_enabled();
    ?>
</body>
</html>