<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY', 'API_SECRET');
$customFields = array("2"=>'new custom field');

//please note - to leave current value intact -
//pass null or no key in custom fields array
//to delete value - pass empty string
//in following example we leave first name and
//first custom value intact and change last name and second custom value
$result = $api->editListMember(6195, '61400000000', null, 'new lastname', $customFields);

if ($result->error->code == 'SUCCESS') {
    echo "Member change saved";

} else {
    echo "Error: {$result->error->description}";
}