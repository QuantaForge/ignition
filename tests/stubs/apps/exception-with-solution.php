<?php

use QuantaQuirk\Ignition\Ignition;
use QuantaQuirk\Ignition\Tests\TestClasses\Models\Car;

include('../../../vendor/autoload.php');

Ignition::make()->register();

(new Car('my-brand', 'my-color'))->brandd;

throw new Exception();
