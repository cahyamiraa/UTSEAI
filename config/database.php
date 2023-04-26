<?php
    define('HOST','localhost');
    define('USER','root');
    define('DB','eai_api');
    define('PASS','');
    define('PORT', 3308);
    $conn = new mysqli(HOST, USER, PASS, DB, PORT) or die('Error');
    $timestamp = date('Y-m-d H:i:s');
    echo $timestamp;
