<?php

interface WeatherObservableInterface
{
    public function registerObserver(WeatherObserverInterface $observer);

    public function notifyObservers();

    public function removeObserver(WeatherObserverInterface $observer);
}