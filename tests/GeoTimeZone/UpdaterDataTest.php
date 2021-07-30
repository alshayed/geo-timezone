<?php

namespace Tests\GeoTimeZone;
use GeoTimeZone\UpdaterData;

include __DIR__ . "/../../vendor/autoload.php";


class UpdaterDataTest
{
    public function main()
    {
        try {
            $updater = new UpdaterData(__DIR__ . '/../../data/');
            $updater->updateData();
        } catch (\ErrorException $error) {
            echo $error->getMessage();
        }
        
    }
}

$test = new UpdaterDataTest();
$test->main();
