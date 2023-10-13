<?php

namespace QuantaQuirk\Ignition\Tests\TestClasses\SolutionProviders;

use QuantaQuirk\Ignition\Contracts\BaseSolution;
use QuantaQuirk\Ignition\Contracts\HasSolutionsForThrowable;
use Throwable;

class AlwaysFalseSolutionProvider implements HasSolutionsForThrowable
{
    public function canSolve(Throwable $throwable): bool
    {
        return false;
    }

    public function getSolutions(Throwable $throwable): array
    {
        return [new BaseSolution('Base Solution')];
    }
}
