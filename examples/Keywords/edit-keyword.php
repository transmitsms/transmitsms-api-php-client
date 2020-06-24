<?php
include 'APIClient2.php';
$api= new transmitsmsAPI('API_KEY','API_SECRET');

 //pause a keyword
 //$result = $api->editKeyword('KEYWORD', '6140000000', null, null, null, null, 'paused');

 //change welcome message
 $result = $api->editKeyword('KEYWORD','6140000000', null, null, 'new welcome message');

 if ($result->error->code == 'SUCCESS') {
     echo 'Keyword saved';

 }  else {
     echo 'Error: {$result->error->description}';
 }