<?php
include 'APIClient2.php';

$api = new transmitsmsAPI('API_KEY','API_SECRET');
$api->url = 'https://api.transmitsms.com/edit-number-options';
$number = '61412345678';
$forward_email = 'email@yourdomain.com';
$forward_sms= '61487654321';
$forward_url = 'https://yoururl.domain.com';
$list_id = '123456';
$welcome_message = 'You have been added to the list!';
$members_message = "You're already on the list!";

 $result = $api->editNumberOptions($number, $forward_email, $forward_sms, $forward_url, $list_id, $welcome_message, $members_message);

 if ($result->error->code == 'SUCCESS') {
   echo var_export($result, true);

 } else {
   echo 'Error: ' . $result->error->description;
 }