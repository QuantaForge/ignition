<?php

use QuantaForge\Ignition\Ignition;
use QuantaForge\Ignition\Tests\TestClasses\ClassWithSyntaxError;

include('../../../vendor/autoload.php');

Ignition::make()
    ->addCustomHtmlToBody('<!-- body html -->')
    ->addCustomHtmlToHead('<!-- head html -->')
    ->register();

ClassWithSyntaxError::execute();
