<?php
// page located at http://example.com/process_gather.php


echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response><Say>You entered " . $_REQUEST['Digits'] . ". Thank you. Good Bye.</Say></Response>";
?>