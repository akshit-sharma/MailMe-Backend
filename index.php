<?php

    $hello = 'hello world';
    echo $hello;

    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    mail ($to, $subject, $message);


?>