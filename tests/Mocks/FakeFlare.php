<?php

namespace QuantaQuirk\Ignition\Tests\Mocks;

use QuantaQuirk\FlareClient\Flare;
use QuantaQuirk\FlareClient\Report;

class FakeFlare extends Flare
{
    public array $sentReports = [];

    public function sendReportToApi(Report $report): void
    {
        $this->sentReports[] = $report;
    }
}
