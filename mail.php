<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $text  = $_POST['text'];
    
    //send email   
    mail("davidmh2010@gmail.com", "New message from davidhe.in", $text, "From:" . $email);
}

?>