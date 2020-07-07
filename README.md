# TransmitsSMS API PHP Client
This repository contains the PHP client for TransmitSMS REST API. Documentation can be found at: https://developer.transmitsms.com/

# Usage
We have put some self-explanatory examples in the examples directory. 
First, you need to download the APIClient2.php file and locate somewhere in your application directory structure.
Add the following lines to your PHP script.


    <?php
    include 'APIClient2.php';
    
    $api = new transmitsmsAPI('API_KEY', 'API_SECRET');

Replace `'API_KEY'` and `'API_SECRET'` with your account credentials.

See examples folder for endpoint usage examples.

# Documentation
Complete documentation, instructions, and examples are available at: https://developer.transmitsms.com/
