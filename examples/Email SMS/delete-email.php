<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->deleteEmail('email@client.com');

if ($result->error->code == 'SUCCESS') {
    echo 'Email deleted';

} else {
    echo 'Error: {$result->error->description}';
}