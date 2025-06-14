<?php

namespace ClOliveira\LivewireCharts;

use ClOliveira\LivewireCharts\Charts\LivewireAreaChart;
use ClOliveira\LivewireCharts\Charts\LivewireColumnChart;
use ClOliveira\LivewireCharts\Charts\LivewireLineChart;
use ClOliveira\LivewireCharts\Charts\LivewirePieChart;
use ClOliveira\LivewireCharts\Charts\LivewireRadarChart;
use ClOliveira\LivewireCharts\Charts\LivewireRadialChart;
use ClOliveira\LivewireCharts\Charts\LivewireTreeMapChart;
use ClOliveira\LivewireCharts\Console\InstallCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireChartsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerCommands();

        $this->registerViews();

        $this->registerPublishables();

        $this->registerComponents();

        $this->registerDirectives();
    }

    public function register()
    {
        $this->app->bind('livewirecharts', LivewireCharts::class);
    }

    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }


    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewire-charts');
    }

    private function registerPublishables()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/livewire-charts'),
            ], 'livewire-charts:views');

            $this->publishes([
                __DIR__.'/../resources/js' => resource_path('js/vendor/livewire-charts'),
            ], 'livewire-charts:scripts');

            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/livewire-charts'),
            ], 'livewire-charts:public');
        }
    }

    private function registerComponents()
    {
        Livewire::component('livewire-line-chart', LivewireLineChart::class);
        Livewire::component('livewire-column-chart', LivewireColumnChart::class);
        Livewire::component('livewire-pie-chart', LivewirePieChart::class);
        Livewire::component('livewire-area-chart', LivewireAreaChart::class);
        Livewire::component('livewire-radar-chart', LivewireRadarChart::class);
        Livewire::component('livewire-tree-map-chart', LivewireTreeMapChart::class);
        Livewire::component('livewire-radial-chart', LivewireRadialChart::class);
    }

    private function registerDirectives()
    {
        Blade::directive('livewireChartsScripts', function () {
            $scriptsUrl = asset('/vendor/livewire-charts/app.js');
            return <<<EOF
<script src="$scriptsUrl"></script>
EOF;
        });
    }
}
