<?php
    session_start();
    include '../includes/db_connect.php';
    if(isset($_POST['login'])){
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        
        $sql= "SELECT * FROM teacher_detail WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            // header("Location: ../index.php?login=error");
            echo "error";
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                
                $hashedpasscheck = hash('sha256', $password);
                if($hashedpasscheck != $row['pwd']){
                    header("Location: ../index.php?login=wrongpass");
                }
                elseif ($hashedpasscheck == $row['pwd'])
                {   
                    // setcookie($row['user_id'], $row['username'], time() + (86400 * 30));

                    $_SESSION['name'] = $row['name'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../teacher_menu.php");
                    // echo "hii you are looged in";
                }
            }
        }

    }
?>