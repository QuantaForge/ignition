<?php

namespace QuantaQuirk\Ignition\Tests\TestClasses\SolutionProviders;

use QuantaQuirk\Ignition\Contracts\BaseSolution;
use QuantaQuirk\Ignition\Contracts\HasSolutionsForThrowable;
use Throwable;

class AlwaysTrueSolutionProvider implements HasSolutionsForThrowable
{
    public function canSolve(Throwable $throwable): bool
    {
        return true;
    }

    public function getSolutions(Throwable $throwable): array
    {
        return [new BaseSolution('My custom solution')];
    }
}
