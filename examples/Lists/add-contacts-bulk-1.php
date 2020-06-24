<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$listName = 'contact LIST 1';
$fileUrl = 'http://yoururl.com/list.csv';
$customFields = array("email", "address");
$countryCode = 'AU';

// Add contacts bulk
$result = $api->addContactsBulk($listName, $fileUrl, $customFields, $countryCode);

if ($result->error->code == 'SUCCESS') {
    echo 'List Created with ID ' . $result->list_id . ". Please check your upload progress.";

} else {
    echo 'Error: ' .$result->error->description;
}
?>