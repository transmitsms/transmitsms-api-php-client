<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$offset = 0;
$limit = 10;
$result = $api->getKeywords('6140000000', $offset,$limit);

if ($result->error->code == 'SUCCESS') {
    echo "There are {$result->keywords_total} keywords, showing page {$result->page->number} of {$result->page->count} <hr>";

    foreach ($result->keywords as $keyword) {
        echo "{$keyword->keyword} - {$keyword->status} <br>";
    }

} else {
    echo "Error: {$result->error->description}";
}