<?php
include '../../APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$offset = 0;
$limit = 10;

$result = $api->getList(6191, $offset, $limit);

if ($result->error->code == 'SUCCESS') {
    echo "List has {$result->members_total} members, 
      showing page {$result->page->number} of {$result->page->count} <hr>";

    foreach ($result->membersas$member) {
        echo "{$member->first_name}{$member->last_name} - {$member->status} <br>";
    }

} else {
    echo "Error: {$result->error->description}";
}