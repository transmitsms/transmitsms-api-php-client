<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$offset = 0;
$limit = 10;

$result = $api->getLists($offset, $limit);

if ($result->error->code == 'SUCCESS') {
    echo "There are {$result->lists_total} lists, 
      showing page {$result->page->number} of {$result->page->count} <hr>";

    foreach ($result->lists as $list) {
        echo "{$list->name} - {$list->members_total} total members <br>";
    }

} else {
    echo "Error: {$result->error->description}";
}