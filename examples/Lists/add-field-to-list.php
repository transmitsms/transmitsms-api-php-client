<?php
include 'APIClient2.php';
$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$customFields = array('custom1_value', 'custom2_value');
$result = $api->addFieldToList(6195, $customFields);
if ($result->error->code == 'SUCCESS') {
    echo "Custom field(s) added";
} else {
    echo "Error: {$result->error->description}";
}