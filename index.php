<?php

    $hello = 'hello world<br/>';
    echo $hello;

    require_once('config/config.php');

    $hello = 'hello world<br/>';
    echo $hello;

    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    $from = "faaltu@faaltu.lol";

//    $sendgridconfig = new SendGridConfig();

    $api_user  = $sendgridconfig->$api_user;
    $api_key  = $sendgridconfig->$api_key;

    echo "user $api_key<br/>key $api_key<br/>";

//
//    $sendgrid = new SendGrid($api_user, $api_key);
//    $email    = new SendGrid\Email();
//
//    $email->addTo($to)
//          ->setFrom($from)
//          ->setSubject($subject)
//          ->setHtml($message);
//
//    $sendgrid->send($email);

?>