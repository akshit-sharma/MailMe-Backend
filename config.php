<?php

    $debug = true;

    $allowed_domains = array('','');

    $REFERRER = $_SERVER['HTTP_REFERER'];

    if($debug){
        echo "Referrer is $REFERRER";
    }
    else{

        if ($REFERRER == '') {
            exit(header('Location: 404.php'));
        }

        $domain = substr($REFERRER, strpos($REFERRER, '://')+3);
        $domain = substr($domain, 0, strpos($domain, '/'));

        if (!in_array($domain, $allowed_domains)) {
            exit(header('Location:404.php'));
        }

    }

?>