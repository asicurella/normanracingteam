<?php 

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $selection = $_POST['selection'];

    $mailTo = "normanracingteam@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received and e-mail from ".$fname.$lname.".\n\n".$message;

    mail($mailTo, $selection, $message, $headers);
    header("Location: index.php?mailsend");
}
?>