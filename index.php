<?php

    require_once('config/config.php');
    require_once 'vendor/autoload.php';

    $deploy = false;
    $success = false;

    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    $from = "faaltu@faaltu.lol";

    if(!isset($to)){
        echo "send email address in to param";
    }

    $sgc = new SendGridConfig();

    $api_user  = $sgc::$api_user;
    $api_key  = $sgc::$api_key;

    $sendgrid = new SendGrid($api_user, $api_key);
    $email    = new SendGrid\Email();

    $email->addTo($to)
          ->setFrom($from)
          ->setSubject($subject)
          ->setHtml($message);

    try {
        $response = $sendgrid->send($email);
       if(!$deploy)
            var_dump($response);
       // $success = true;
    } catch(\SendGrid\Exception $e) {
        if (!$deploy) {
            echo $e->getCode();
            foreach ($e->getErrors() as $er) {
                echo $er;
            }
        }
    }

    if($success){
        echo "Email sent";
    }

?>

