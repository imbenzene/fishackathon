<?php
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+16469180605"=>"Ian Anthony Flynn",
        "+16465190525"=>"Gary"
    );
 
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "Monkey";
 
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>This is a giant tiger prawn. 
        It is a marine crustacean that is widely reared for food.</Say>
    <!-- <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play> -->
    <!-- <Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
        <Say>To speak to a real monkey, press 1.  Press any other key to start over.</Say>
    </Gather> -->

    <Gather action="process_gather.php" method="GET">
        <Say>
            How many types of this fish have you caught?
            Enter the number, followed by the pound sign.
        </Say>
    </Gather>
    <Say>We didn't receive any input. Goodbye!</Say>
       

    <!-- 

    Create test cases for each digit press:
    1. Receive an image from tele # > triggers backend, get a call

    -->
</Response>