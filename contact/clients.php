<?php
    if(isset($_POST['servicesNeeded'])){
        $servicesNeeded = $_POST['servicesNeeded'];
        }
    if(isset($_POST['services'])){
        $services = $_POST['services'];
        }
    if(isset($_POST['notes'])){
        $notes = $_POST['notes'];
        }
    
    $ip = $_SERVER['REMOTE_ADDR'];

    $formcontent="IP: $ip \n From: Reno Custom Cleaning \n Requests: $servicesNeeded \n \n Specifics: $services \n Notes: $notes";
    $recipient = "info@webdesignsdoneright.com";
    $subject = "Reno Web Work Needed";
        
    mail($recipient, $subject, $formcontent) or die("Error!");
    echo "Thank You!" . " -" . "<a href='/client/reno/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
    header("Location: /client/reno/");
?>