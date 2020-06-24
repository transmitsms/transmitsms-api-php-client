<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

// getting responses to message by ID 
//$result = $api->getSmsResponses(49484);

// getting responses by keyword ID
//$result = $api->getSmsResponses(null, 91);

// getting keyword responses by keyword and number
$result = $api->getSmsResponses(null, null, 'cmon', '6140000000', '6140000001');

if ($result->error->code == 'SUCCESS') {
    echo "There are {$result->total} responses, showing page 
    {$result->page->number} of {$result->page->count} <hr>";
    
    foreach ($result->responsesas as $response) {
        echo "{$response->first_name}{$response->last_name} responded 
        '{$response->response}' at {$response->received_at}<br>";
    }

} else {
    echo "Error: {$result->error->description}";
}