<?php


namespace ClOliveira\LivewireCharts;


use ClOliveira\LivewireCharts\Models\AreaChartModel;
use ClOliveira\LivewireCharts\Models\ColumnChartModel;
use ClOliveira\LivewireCharts\Models\LineChartModel;
use ClOliveira\LivewireCharts\Models\PieChartModel;
use ClOliveira\LivewireCharts\Models\RadarChartModel;
use ClOliveira\LivewireCharts\Models\RadialChartModel;
use ClOliveira\LivewireCharts\Models\TreeMapChartModel;

class LivewireCharts
{
    public function lineChartModel()
    {
        return (new LineChartModel)
            ->singleLine();
    }

    public function multiLineChartModel()
    {
        return (new LineChartModel)
            ->multiLine();
    }

    public function columnChartModel()
    {
        return (new ColumnChartModel)
            ->singleColumn();
    }

    public function multiColumnChartModel()
    {
        return (new ColumnChartModel)
            ->multiColumn();
    }

    public function areaChartModel()
    {
        return new AreaChartModel;
    }

    public function pieChartModel()
    {
        return new PieChartModel;
    }

    public function radarChartModel()
    {
        return new RadarChartModel();
    }

    public function treeMapChartModel(): TreeMapChartModel
    {
        return new TreeMapChartModel();
    }

    public function radialChartModel(): RadialChartModel
    {
        return new RadialChartModel();
    }
}
