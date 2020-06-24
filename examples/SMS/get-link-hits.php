<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$messageID = 123;
$result = $api->getLinkHits($messageID);

if ($result->error->code == 'SUCCESS') {
    echo var_export($result, true);
} else {
    echo 'Error:' . $result->error->description;
}

?>