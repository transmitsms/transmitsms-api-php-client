<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->getSmsStats(49680);

if ($result->error->code == 'SUCCESS') {
    print_r($result->stats);
} else {
    echo 'Error: {$result->error->description}';
}
