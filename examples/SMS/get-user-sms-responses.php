<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

$result = $api->getUserSmsResponses();

if ($result->error->code == 'SUCCESS') {
    print_r($result->responses);
} else {
    echo 'Error: {$result->error->description}';
}