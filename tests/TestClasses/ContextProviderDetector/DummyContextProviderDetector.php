<?php

namespace QuantaQuirk\Ignition\Tests\TestClasses\ContextProviderDetector;

use QuantaQuirk\FlareClient\Context\ContextProvider;
use QuantaQuirk\FlareClient\Context\ContextProviderDetector;

class DummyContextProviderDetector implements ContextProviderDetector
{
    public function detectCurrentContext(): ContextProvider
    {
        return new DummyContextProvider();
    }
}
