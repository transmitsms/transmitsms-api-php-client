<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->cancelSms(49680);

if ($result->error->code == 'SUCCESS') {
    echo 'Message cancelled';
} else {
    echo 'Error: {$result->error->description}';
}
