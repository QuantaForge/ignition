<?php

use QuantaQuirk\Ignition\Ignition;
use QuantaQuirk\Ignition\Tests\TestClasses\ClassWithSyntaxError;

include('../../../vendor/autoload.php');

Ignition::make()
    ->addCustomHtmlToBody('<!-- body html -->')
    ->addCustomHtmlToHead('<!-- head html -->')
    ->register();

ClassWithSyntaxError::execute();
