<?php

namespace QuantaForge\Ignition\Tests\TestClasses\SolutionProviders;

use QuantaForge\Ignition\Contracts\BaseSolution;
use QuantaForge\Ignition\Contracts\HasSolutionsForThrowable;
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
