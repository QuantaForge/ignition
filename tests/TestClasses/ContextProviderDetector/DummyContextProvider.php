<?php

namespace QuantaForge\Ignition\Tests\TestClasses\ContextProviderDetector;

use QuantaForge\FlareClient\Context\ContextProvider;

class DummyContextProvider implements ContextProvider
{
    public function toArray(): array
    {
        return [
            'dummy-context-name' => 'dummy-context-value',
        ];
    }
}
