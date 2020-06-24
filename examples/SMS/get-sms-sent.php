<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$offset = 0;
$limit = 10;
$result = $api->getSmsSent(49606, $offset, $limit);

if ($result->error->code == 'SUCCESS') {
    echo "Message sent to {$result->total} recipients, showing page {$result->page->number}
     of {$result->page->count} <hr>";

    foreach ($result->recipients as $recipient) {
        echo "{$recipient->first_name} {$recipient->last_name} - {$recipient->delivery_status} <br>";
    }
} else {
    echo "Error: {$result->error->description}";
}
