<?php

use QuantaQuirk\Ignition\Ignition;
use QuantaQuirk\Ignition\Tests\TestClasses\ClassWithSyntaxError;

include('../../../vendor/autoload.php');

Ignition::make()->register();

ClassWithSyntaxError::execute();
