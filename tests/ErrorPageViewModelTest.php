<?php

use QuantaForge\FlareClient\Flare;
use QuantaForge\Ignition\Config\IgnitionConfig;
use QuantaForge\Ignition\ErrorPage\ErrorPageViewModel;

it('can encode invalid user data', function () {
    $flareClient = Flare::make();

    $exception = new Exception('Test Exception');

    $report = $flareClient->createReport($exception);

    $report->group('bad-utf8', [
        'name' => 'JohnDoe'.mb_convert_encoding('ø', 'ISO-8859-1'),
    ]);

    $model = new ErrorPageViewModel($exception, new IgnitionConfig([]), $report, []);

    $this->assertNotEmpty($model->jsonEncode($report->toArray()));
});
