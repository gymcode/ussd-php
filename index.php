<?php

// declaring variables sent via post
$session_id = $_POST['sessionId'];
$service_code = $_POST['service_code'];
$phone_number = $_POST['phone'];
$text = $_POST['text'];

switch ($text) {
    case '':
        // TODO: this is the frist request// note how we start with CON
        $response = "CON what would you like to check /n"; 
        $response = "1. My Account Number";
        $response = "2. My Phone Number"; 
        break;

    case '1':
        // TODO: this is the frist request// note how we start with CON
        $response = "CON Choose account information you want to view  /n"; 
        $response = "1. My Account Number";
        $response = "2. My Phone Number"; 
        break;

    case '':
        // TODO: this is the frist request// note how we start with CON
        $response = "CON what would you like to check /n"; 
        $response = "1. My Account Number";
        $response = "2. My Phone Number"; 
        break;   
    
    default:
        # code...
        break;
}

?>
