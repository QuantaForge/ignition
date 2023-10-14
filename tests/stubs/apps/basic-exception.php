<?php

use QuantaForge\Ignition\Ignition;

include('../../../vendor/autoload.php');

Ignition::make()->register();

throw new Exception();
