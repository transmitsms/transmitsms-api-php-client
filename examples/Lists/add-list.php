<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$customFields = array('custom1', 'custom2');
$result = $api->addList('LIST NAME', $customFields);

if ($result->error->code == 'SUCCESS') {
    echo "List Created with ID {$result->id}";

} else {
    echo "Error: {$result->error->description}";
}