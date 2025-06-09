<?php

namespace ClOliveira\LivewireCharts\Tests;

use ClOliveira\LivewireCharts\Charts\LivewireLineChart;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;

class LivewireLineChartTest extends TestCase
{
    private function buildComponent() : Testable
    {
        return Livewire::test(LivewireLineChart::class);
    }

    /** @test */
    public function can_build_component()
    {
        //Act
        $component = $this->buildComponent();

        //Assert
        $this->assertNotNull($component);
    }
}
