<?php

class WeatherData extends WeatherObservable
{
    /** @var float */
    private $temperature = 0.0;

    /** @var float */
    private $humidity = 0.0;

    /** @var float */
    private $pressure = 760.0;

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->notifyObservers();
    }

    protected function getChangedData(): WeatherInfo
    {
        $info = new WeatherInfo();
        $info->temperature = $this->temperature;
        $info->humidity = $this->humidity;
        $info->pressure = $this->pressure;
        return $info;
    }
}