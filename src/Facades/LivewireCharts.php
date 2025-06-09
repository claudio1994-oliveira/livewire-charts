<?php

namespace ClOliveira\LivewireCharts\Facades;

use ClOliveira\LivewireCharts\Models\AreaChartModel;
use ClOliveira\LivewireCharts\Models\ColumnChartModel;
use ClOliveira\LivewireCharts\Models\LineChartModel;
use ClOliveira\LivewireCharts\Models\PieChartModel;
use ClOliveira\LivewireCharts\Models\RadarChartModel;
use ClOliveira\LivewireCharts\Models\RadialChartModel;
use ClOliveira\LivewireCharts\Models\TreeMapChartModel;
use Illuminate\Support\Facades\Facade;

/**
 * Class LivewireCharts
 * @package ClOliveira\LivewireCharts\Facades
 * @method static LineChartModel lineChartModel()
 * @method static LineChartModel multiLineChartModel()
 * @method static ColumnChartModel columnChartModel()
 * @method static ColumnChartModel multiColumnChartModel()
 * @method static AreaChartModel areaChartModel()
 * @method static PieChartModel pieChartModel()
 * @method static RadarChartModel radarChartModel()
 * @method static TreeMapChartModel treeMapChartModel()
 * @method static RadialChartModel radialChartModel()
 */
class LivewireCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewirecharts';
    }
}
