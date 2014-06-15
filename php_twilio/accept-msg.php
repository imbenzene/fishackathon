<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('../Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC44161919c306f749bc46c8d6e7e4adba"; 
$token = "5d05d4999ef436725975cd4ad258e282"; 
$client = new Services_Twilio($sid, $token);
 
// $message = $client->account->messages->sendMessage(
//   '+13852824202', // From a valid Twilio number
//   '+16465190525', // Text this number
//   "Hello monkey!"
// );

// print $message->sid;

$call = $client->account->calls->create(
	"+13852824202", "+16465190525", "http://demo.twilio.com/docs/voice.xml", array(
        "SendDigits" => "1234#",
    "Method" => "GET"
    ));
echo $call->sid;

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