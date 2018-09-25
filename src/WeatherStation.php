<?php

class WeatherStation
{
    public function run()
    {
        $wd = new WeatherData();

        $display = new Display();
        $wd->registerObserver($display);

        $wd->setMeasurements(3, 0.7, 760);
        $wd->setMeasurements(4, 0.8, 761);
    }
}