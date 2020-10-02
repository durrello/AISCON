<?php

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    //error handler
    //check for empty field

    if (empty($name) || empty($email) || empty($country) || empty($city) || empty($subject) || empty($message)) {
        header("Location: ../index.php?contact=empty");
        exit();
    } else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $country) || !preg_match("/^[a-zA-Z]*$/", $city) || !preg_match("/^[a-zA-Z]*$/", $subject) || !preg_match("/^[a-zA-Z]*$/", $message)) {
            header("Location: ../index.php?contact=invalid");
            exit();
        } else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?contact=email");
                exit();
            } else {
                $sql = "SELECT * from contacts WHERE contact_id='$id'";

                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../index.php?contact=alreadySentMessage");
                    exit();
                } else {

                    // //insert the message and contact into the database
                    $sql = "INSERT INTO contacts (contact_name, contact_email, contact_country,  contact_city, contact_number, contact_subject, contact_message) VALUES ('$name', '$email', '$country', '$city', '$number', '$subject', '$message');";
                    mysqli_query($conn, $sql);
                    
                    header("Location: ../index.php?contact=success");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}


