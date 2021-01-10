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
        $response .= "1. My Account Number";
        $response .= "2. My Phone Number"; 
        break;

    case '1':
        // TODO: this is the frist request// note how we start with CON
        $response = "CON Choose account information you want to view  /n"; 
        $response .= "1. My Account Number";
        $response .= "2. My Account Balance"; 
        break;

    case '2':
        // TODO: this is the frist request// note how we start with CON
        $response = "END Your phone nummber is ".$phone_number;       
        break;   
    
    case '1*1':
        // TODO: this is the frist request// note how we start with CON
        $ACCNUM = "ACC1001";

        //TODO: note this is a terminal request therefore it starts with an END
        $response = "END Your account number is ".$ACCNUM;
        break; 

    case '1*2':
        // TODO: this is the frist request// note how we start with CON
        $acc_bal = "GH 500";

        $response = "END Your Account Balance is ".$acc_bal;       
        break; 

    default:
        break;
}

?>
