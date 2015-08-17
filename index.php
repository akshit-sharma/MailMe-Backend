<?php
    $to = $_REQUEST['to'];
    $subject = 'Test mail';
    $message = "this is a test message";
    mail ($to, $subject, $message);
?>