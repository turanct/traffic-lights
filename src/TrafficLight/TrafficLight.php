<?php

namespace TrafficLight;

use TrafficLight\Clock\Clock;
use TrafficLight\Clock\Tick;
use TrafficLight\Clock\UsesClock;
use TrafficLight\Color\ColorSequence;

class TrafficLight implements UsesClock
{
    private $clock;
    private $colorSequence;

    public function __construct(Clock $clock, ColorSequence $colorSequence)
    {
        $clock->subscribe($this);

        $this->clock = $clock;
        $this->colorSequence = $colorSequence;
    }

    public function clockTicked(Tick $tick)
    {
        $this->colorSequence->next();
    }

    public function activeColor()
    {
        return $this->colorSequence->current();
    }
}
