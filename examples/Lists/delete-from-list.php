<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');

// this will delete member from all lists that belong to you
// $result = $api->deleteFromList(6195, '61400000000');

// this will delete member from provided list
$result = $api->deleteFromList(6195,'61400000000');

if ($result->error->code == 'SUCCESS') {
    echo "Member deleted from lists: ".implode(', ',$result->list_ids);

}
else {
    echo "Error: {$result->error->description}";
}