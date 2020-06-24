<?php

include '../APIClient2.php';
 
$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
 
 // sending to a set of numbers
 $result = $api->sendSms('test', '6140000000, 6140000001');
 
 // sending to a list
 //$result = $api->sendSms('test', null, 'callerid', null, 6151);
 
 if ($result->error->code == 'SUCCESS') {
    echo "Message to {$result->recipients} recipients sent with ID 
    {$result->message_id}, cost {$result->cost}";

 } else {
     echo "Error: {$result->error->description}";
 }