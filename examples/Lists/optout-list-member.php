<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

// Opt out of specific lists
$result = $api->optoutListMember('1223,5667', '6140000000');

// Opt out of all lists
$result = $api->optoutListMember(0, '6140000000');

if ($result->error->code == 'SUCCESS') {
    echo "Message to {$result->recipients} recipients sent with ID 
      {$result->message_id}, cost {$result->cost}";

} else {
    echo "Error: {$result->error->description}";
}
