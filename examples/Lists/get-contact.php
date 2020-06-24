<?php
include '../../APIClient2.php';
$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$api->url = 'https://api.transmitsms.com/';

$msidsn = '61491570158';
$list_id = '1234567';

$result = $api->getContact($list_id,$msidsn,);

if ($result->error->code == 'SUCCESS') {
    echo var_export($result, true);

} else {
    echo 'Error: '. $result->error->description;
}