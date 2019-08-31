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
<body class="teacher_menu_body">
    

    <header>
        <div class="logo">
            <img src="">
        </div>
    </header>

    <?php

        $sql = "SELECT * FROM subject_detail WHERE name='$_SESSION[username]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            // header("Location: ../index.php?login=error");
            echo "error";
        }
        else{
            while($row =  mysqli_fetch_assoc($result)){
                echo "<a href='qrcode.php?code=".$row['subcode']."&sec=".$row['sec']."'><div>
                        <div>"
                        .$row['subcode'].
                        "</div>
                    </div></a>";
            }
        }

    ?>

</body>
</html>