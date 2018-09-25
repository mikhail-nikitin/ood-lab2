<?php

class Display implements WeatherObserverInterface
{
    public function update(WeatherInfo $newDataPoint)
    {
        echo "Current Temp {$newDataPoint->temperature}\n" .
             "Current Hum {$newDataPoint->humidity}\n" .
             "Current Pressure {$newDataPoint->pressure}\n" .
             "----------------\n";
    }
}