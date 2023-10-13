<?php

namespace QuantaQuirk\Ignition\Tests\TestClasses;

use Closure;
use QuantaQuirk\FlareClient\FlareMiddleware\FlareMiddleware;
use QuantaQuirk\FlareClient\Report;

class DummyFlareMiddleware implements FlareMiddleware
{
    public function handle(Report $report, Closure $next)
    {
        $report->message("{$report->getMessage()}, now modified");

        return $next($report);
    }
}
