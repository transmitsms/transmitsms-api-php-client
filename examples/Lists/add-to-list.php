<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$customFields = array('custom1_value', 'custom2_value');
$result = $api->addToList(6195, '61400000000', 'firstname', 'lastname', $customFields);

if ($result->error->code == 'SUCCESS') {
    echo "Member added";

} else {
    echo "Error: {$result->error->description}";
}