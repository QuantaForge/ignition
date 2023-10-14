<?php

use QuantaForge\Ignition\Ignition;

include('../../../vendor/autoload.php');

Ignition::make()
    ->runningInProductionEnvironment()
    ->register();

throw new Exception();
