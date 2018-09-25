<?php

abstract class WeatherObservable implements WeatherObservableInterface
{
    /** @var WeatherObserverInterface[] */
    private $observers = [];

    public function registerObserver(WeatherObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this->getChangedData());
        }
    }

    public function removeObserver(WeatherObserverInterface $observer)
    {
        $index = array_search($observer, $this->observers, $strict = true);
        if ($index !== false)
        {
            unset($this->observers[$index]);
        }
    }

    protected abstract function getChangedData(): WeatherInfo;
}