<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$result = $api->formatNumber('0455667889', 'AU');

if ($result->error->code == 'SUCCESS') {
    echo 'Number valid and in international: {$result->number->international}';
} else {
    echo 'Error: {$result->error->description}';
}
