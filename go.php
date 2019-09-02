<?php
    session_start();
    include 'includes/db_connect.php';
    if(isset($_POST['GO'])){
        $x = mysqli_real_escape_string($conn,$_POST['ujjwal']);
        header("Location: $x");
    }
?>
