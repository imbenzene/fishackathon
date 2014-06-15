<?php
// page located at http://example.com/process_gather.php


echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response><Say>You entered " . $_REQUEST['Digits'] . "</Say><Gather action='process_gather2.php' method='GET'><Say>What are the sizes of the species caught? Enter the number, followed by the pound sign.</Say></Gather></Response>";

	
?>
<!-- 
<Response>
    
    <Gather action="process_gather2.php" method="GET">
        <Say>
            What are the sizes of the species caught?
            Enter the number, followed by the pound sign.
        </Say>
    </Gather>
    <Say>We didn't receive any input. Goodbye!</Say>
       
</Response> -->