<?php


namespace ClOliveira\LivewireCharts\Models;

/**
 * Class PieChartModel
 * @package ClOliveira\LivewireCharts\Models
 */
class PieChartModel extends BaseChartModel
{
    private $onSliceClickEventName;

    private $opacity;

    private $type;

    private $data;

    public function __construct()
    {
        parent::__construct();

        $this->onSliceClickEventName = null;

        $this->opacity = 0.75;

        $this->type = 'pie';

        $this->data = collect();
    }

    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function asPie()
    {
        return $this->setType('pie');
    }

    public function asDonut()
    {
        return $this->setType('donut');
    }

    public function withOnSliceClickEvent($onSliceClickEventName)
    {
        $this->onSliceClickEventName = $onSliceClickEventName;

        return $this;
    }

    public function addSlice($title, $value, $color, $extras = [])
    {
        $this->data->push([
            'title' => $title,
            'value' => $value,
            'color' => $color,
            'extras' => $extras,
        ]);

        return $this;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'onSliceClickEventName' => $this->onSliceClickEventName,
            'opacity' => $this->opacity,
            'type' => $this->type,
            'data' => $this->data->toArray(),
        ]);
    }

    public function fromArray($array)
    {
        parent::fromArray($array);

        $this->onSliceClickEventName = data_get($array, 'onSliceClickEventName', null);

        $this->opacity = data_get($array, 'opacity', 0.75);

        $this->type = data_get($array, 'type', 'pie');

        $this->data = collect(data_get($array, 'data', []));
    }
}
