<?php

namespace TrafficLight\Clock;

interface UsesClock
{
    public function clockTicked(Tick $tick);
}

