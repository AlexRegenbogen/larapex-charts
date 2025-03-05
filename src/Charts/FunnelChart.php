<?php

namespace marineusde\LarapexCharts\Charts;

use marineusde\LarapexCharts\Contracts\MustAddComplexData;
use marineusde\LarapexCharts\LarapexChart;
use marineusde\LarapexCharts\Traits\ComplexChartDataAggregator;

class FunnelChart extends LarapexChart implements MustAddComplexData
{
    use ComplexChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
        $this->horizontal = json_encode(['horizontal' => true, 'isFunnel' => true]);
    }

    public function addSerie(string $name, array $data) :FunnelChart
    {
        return $this->addData($name, $data);
    }
}
