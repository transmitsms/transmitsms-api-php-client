<?php

include '/../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

$result = $api->leaseNumber('6140000000');

if ($result->error->code == 'SUCCESS') {
    echo 'This number is {$result->status} and valid up to {$result->next_charge}';
} else {
    echo 'Error: {$result->error->description}';
}