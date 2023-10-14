<?php

namespace QuantaForge\Ignition\Contracts;

use Throwable;

/**
 * Interface used for SolutionProviders.
 */
interface HasSolutionsForThrowable
{
    public function canSolve(Throwable $throwable): bool;

    /** @return array<int, \QuantaForge\Ignition\Contracts\Solution> */
    public function getSolutions(Throwable $throwable): array;
}
