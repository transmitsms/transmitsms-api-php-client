<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->getSms(49680);

if ($result->error->code == 'SUCCESS') {
    echo "Message to {$result->recipients} recipients sent with 
    ID {$result->message_id}, cost {$result->cost}";
} else {
    echo "Error: {$result->error->description}";
}