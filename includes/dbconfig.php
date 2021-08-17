<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount ::fromJsonFile(__DIR__ . '/lionexpress-d42ae-firebase-adminsdk-7ssxr-2e8dea666f.json')

$firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://lionexpress-d42ae-default-rtdb.firebaseio.com/')
        ->create();

?>