<?php
    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if(!$res['success']){
        // Error
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        }
    if(isset($_POST['phone'])){
        $phone = $_POST['phone'];
        }
    if(isset($_POST['services'])){
        $services = $_POST['services'];
        }
    if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
        }
    
    /* below is the recaptcha checker... */

function reCaptcha($recaptcha){
        $secret = "6Ld14acUAAAAAFDQ78-VwZqWdyO1w3705hfuPQ02";
        $ip = $_SERVER['REMOTE_ADDR'];
      
        $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        $data = curl_exec($ch);
        curl_close($ch);
      
        return json_decode($data, true);
      }
    $ip = $_SERVER['REMOTE_ADDR'];

    $formcontent=" From: $name \n Email: $email \n Phone Number: $phone \n Services: $services \n Subject: $subject";
    $recipient = "martin@webdesignsdoneright.com,kmartinezz2112@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    header("Location: /");
    echo "Thank You!" . " -" . "<a href='/contact/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
