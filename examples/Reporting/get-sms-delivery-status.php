<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$messageID = 250;
$msisdn = '61423093477';
$result = $api->getSmsDeliveryStatus($messageID, $msisdn);

if ($result->error->code == 'SUCCESS') {
    echo var_export($result, true);

} else {
    echo 'Error: '.$result->error->description;
}
