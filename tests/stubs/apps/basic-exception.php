<?php

use QuantaQuirk\Ignition\Ignition;

include('../../../vendor/autoload.php');

Ignition::make()->register();

throw new Exception();
