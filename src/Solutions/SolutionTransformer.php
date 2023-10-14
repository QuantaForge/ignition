<?php

namespace QuantaForge\Ignition\Solutions;

use QuantaForge\Contracts\Support\Arrayable;
use QuantaForge\Ignition\Contracts\Solution;

/** @implements Arrayable<string, array<string,string>|string|false> */
class SolutionTransformer implements Arrayable
{
    protected Solution $solution;

    public function __construct(Solution $solution)
    {
        $this->solution = $solution;
    }

    /** @return array<string, array<string,string>|string|false> */
    public function toArray(): array
    {
        return [
            'class' => get_class($this->solution),
            'title' => $this->solution->getSolutionTitle(),
            'links' => $this->solution->getDocumentationLinks(),
            'description' => $this->solution->getSolutionDescription(),
            'is_runnable' => false,
            'ai_generated' => $this->solution->aiGenerated ?? false,
        ];
    }
}
