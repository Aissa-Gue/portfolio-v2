<?php
include 'config.php';
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $qry = "INSERT INTO mails (name,email,subject,message) VALUES('$name','$email','$subject','$message')";
    if (!mysqli_query($conn, $qry)) {

        echo '<script>alert("ERROR: Email NOT SENT !")</script>';
        echo '<script>window.location.href = "index.php"</script>';
        //echo mysqli_error($conn);
    } else {
        echo '<script>alert("Email SENT SUCCESSFULY")</script>';
        echo '<script>window.location.href = "index.php"</script>';
    }
    //header("Location: index.php");
}