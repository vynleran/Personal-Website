<?php
    if (isset($_POST['submit'])){
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $myEmail = "pjahanlou@gmail.com";
        $header = "Form Submission From $firstName $lastName";
        $emailMessage = "Email: $email \r\n Subject: $subject \r\n Message: $message"; 

        mail($myEmail, $subject, $emailMessage, $header);
        header("Location: index.html?mailsend");
    }
?>