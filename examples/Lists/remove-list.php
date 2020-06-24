<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->removeList(6191);

echo "Error: {$result->error->description}".PHP_EOL;