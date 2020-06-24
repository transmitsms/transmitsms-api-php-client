<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$offset = 0;
$limit = 10;
$result = $api->getNumbers($offset, $limit, $filter = 'available');

if ($result->error->code == 'SUCCESS') {
    echo 'There are {$result->numbers_total} numbers, 
     showing page {$result->page->number} of {$result->page->count} <hr>';

    foreach ($result->numbers as $number) {
        echo 'Number {$number->number} is {$number->status}
       and valid up to {$number->next_charge}<br>';
    }

} else {
    echo 'Error: {$result->error->description}';
}