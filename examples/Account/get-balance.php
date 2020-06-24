<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->getBalance();

if ($result->error->code == 'SUCCESS') {
    echo "Your balance is {$result->balance} {$result->currency}";

} else {
    echo "Error: {$result->error->description}";
}