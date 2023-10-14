<?php

namespace QuantaForge\Ignition\Tests\Mocks;

use QuantaForge\FlareClient\Flare;
use QuantaForge\FlareClient\Report;

class FakeFlare extends Flare
{
    public array $sentReports = [];

    public function sendReportToApi(Report $report): void
    {
        $this->sentReports[] = $report;
    }
}
