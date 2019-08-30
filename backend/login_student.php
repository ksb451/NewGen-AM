<?php
    session_start();
    include '../includes/db_connect.php';
    if(isset($_POST['login'])){
        
        $roll = mysqli_real_escape_string($conn, $_POST['roll']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        
        $sql= "SELECT * FROM student_detail WHERE roll='$roll'";
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
                    // header("Location: ../index.php?login=wrongpass");
                    echo "error";
                }
                elseif ($hashedpasscheck == $row['pwd'])
                {   
                    // setcookie($row['user_id'], $row['username'], time() + (86400 * 30));

                    $_SESSION['name'] = $row['name'];
                    $_SESSION['roll'] = $row['roll'];
                    // $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['email'] = $row['email'];
                    header("Location: ../student_menu.php");
                    // echo "hii you are looged in";
                }
            }
        }

    }
?>