<?php

namespace QuantaQuirk\Ignition\Tests\Solutions;

use Exception;
use QuantaQuirk\Cache\ArrayStore;
use QuantaQuirk\Cache\Repository;
use QuantaQuirk\Ignition\Solutions\OpenAi\OpenAiSolutionProvider;

it('can solve an an exception using ai', function () {
    if (! canRunOpenAiTest()) {
        $this->markTestSkipped('Cannot run AI test');

        return;
    }

    $repository = new Repository(new ArrayStore());

    $solutionProvider = new OpenAiSolutionProvider(
        env('OPEN_API_KEY'),
        $repository,
    );

    $solutions = $solutionProvider->getSolutions(new Exception('T_PAAMAYIM_NEKUDOTAYIM expected'));

    $solution = $solutions[0];

    expect($solution->getSolutionDescription())->toBeString();
});
