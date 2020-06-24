<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->addEmail('email@client.com', 1);

if ($result->error->code == 'SUCCESS') {
    echo 'Email added';

} else {
    echo 'Error: {$result->error->description}';
}