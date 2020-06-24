<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

$result = $api->addKeyword('KEYWORD', '6140000000', '', 1234,
    'hi there new member', 'hi, you are already registered');

if ($result->error->code == 'SUCCESS') {
    echo"Keyword added";

} else {
    echo"Error: {$result->error->description}";
}