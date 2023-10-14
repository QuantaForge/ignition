<?php

namespace QuantaForge\Ignition\Tests\TestClasses\ContextProviderDetector;

use QuantaForge\FlareClient\Context\ContextProvider;
use QuantaForge\FlareClient\Context\ContextProviderDetector;

class DummyContextProviderDetector implements ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider
    {
        return new DummyContextProvider();
    }
}
