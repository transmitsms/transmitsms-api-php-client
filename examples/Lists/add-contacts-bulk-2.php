<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$listID = 123;
$result = $api->addContactsBulkProgress($listID);

if ($result->error->code == 'SUCCESS') {
    echo var_export($result, true);

} else {
    echo 'Error: ' .$result->error->description;
}
?>