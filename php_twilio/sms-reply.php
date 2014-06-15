<?php
 
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    // make an associative array of senders we know, indexed by phone number
    $people = array(
        "+16469180605"=>"Ian Anthony Flynn",
        "+16465190525"=>"Gary"
    );
 
    $type_of_msg = array(
        "+16469180605"=>"Ian Anthony Flynn",
        "+16465190525"=>"100"
    );

    // if the sender is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']]) {
        $name = "Monkey";
    }

    $body = $_REQUEST['Body'];
    $result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
    $result = trim($result);
    $result = strtolower($result);

    $abc = "<Response><Message>Hello, thanks for submitting an image of your catch and taking this survey! This is a giant tiger prawn. It is a marine crustacean that is widely reared for food. How many types of this fish have you caught?</Message></Response>";
    
    if($result == "100") {
        $abc = "<Response><Message>What are the sizes of the species caught?</Message></Response>";
    }

    if($result == "30cm") {
        $abc = "<Response><Message>Thank you for recording. Good bye.</Message></Response>";
    }

     if($result == "call") {
        $abc = "<Response><Message>Please call 385-282-4202</Message></Response>";
    }

    echo $abc;

    // $body = $_REQUEST['Body'];
    // $num_of_attachment = $_REQUEST['NumMedia'];
    // $pic1 = $_REQUEST['MediaUrl1'];
    // $result = preg_replace("/[^A-Za-z0-9]/u", " ", $body);
    // $result = trim($result);
    // $result = strtolower($result);
 
    
?>