<?php

namespace TrafficLight\Clock;

class Clock
{
    private $listeners = array();

    public function tick()
    {
        $tick = new Tick();

        array_walk(
            $this->listeners,
            function($listener) use ($tick) {
                $listener->clockTicked($tick);
            }
        );

        return $tick;
    }

    public function subscribe(UsesClock $listener)
    {
        if (!in_array($listener, $this->listeners)) {
            $this->listeners[] = $listener;
        }
    }
}
