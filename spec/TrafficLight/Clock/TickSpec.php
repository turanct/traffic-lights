<?php

namespace spec\TrafficLight\Clock;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TickSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TrafficLight\Clock\Tick');
    }
}
