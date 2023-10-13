<?php

namespace QuantaQuirk\Ignition\Tests\TestClasses\ContextProviderDetector;

use QuantaQuirk\FlareClient\Context\ContextProvider;

class DummyContextProvider implements ContextProvider
{
    public function toArray(): array
    {
        return [
            'dummy-context-name' => 'dummy-context-value',
        ];
    }
}
