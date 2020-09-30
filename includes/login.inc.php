<?php

session_start();

if (isset($_POST['submit'])) {
    
    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);


    //error handlers
    //check if inputs are empty

    if (empty($uid) || empty($email)) {
        header("Location: ../index.php?login=empty");
        exit(); 
    }else{
        $sql = "SELECT * from users WHERE user_uid='$uid' OR user_email='$uid' ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
        }else{
            if ($row = mysqli_fetch_assoc($result)) {
                //login 
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_first'] = $row['user_first'];
                $_SESSION['u_last'] = $row['user_last'];
                $_SESSION['u_email'] = $row['user_email'];
                $_SESSION['u_uid'] = $row['user_uid'];

                header("Location: ../blog.php?login=success");
                exit();
            }
        }
    }

}else{
    header("Location: ../index.php?login=error");
    exit();
}

