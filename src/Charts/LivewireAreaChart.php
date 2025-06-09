<?php

namespace ClOliveira\LivewireCharts\Charts;

use ClOliveira\LivewireCharts\Models\AreaChartModel;
use Livewire\Component;

/**
 * Class LivewireAreaChart
 * @package ClOliveira\LivewireCharts\Charts
 */
class LivewireAreaChart extends Component
{
    public $areaChartModel;

    public function mount(AreaChartModel $areaChartModel)
    {
        $this->areaChartModel = $areaChartModel->toArray();
    }

    public function onPointClick($point)
    {
        $onPointClickEventName = data_get($this->areaChartModel, 'onPointClickEventName', null);

        if ($onPointClickEventName === null) {
            return;
        }

        $this->dispatch($onPointClickEventName, $point);
    }

    public function render()
    {
        return view('livewire-charts::livewire-area-chart');
    }
}
