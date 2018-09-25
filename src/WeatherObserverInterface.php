<?php

interface WeatherObserverInterface
{
    public function update(WeatherInfo $newDataPoint);
}