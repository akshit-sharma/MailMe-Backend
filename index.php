<?php

    $hello = 'hello world';
    echo $hello;

    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    if(isset($to))
        mail ($to, $subject, $message);


?>