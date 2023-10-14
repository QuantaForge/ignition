<?php

namespace QuantaForge\Ignition\Tests\TestClasses;

use Closure;
use QuantaForge\FlareClient\FlareMiddleware\FlareMiddleware;
use QuantaForge\FlareClient\Report;

class DummyFlareMiddleware implements FlareMiddleware
{
    public function handle(Report $report, Closure $next)
    {
        $report->message("{$report->getMessage()}, now modified");

        return $next($report);
    }
}
