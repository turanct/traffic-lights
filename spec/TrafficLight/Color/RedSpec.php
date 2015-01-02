<?php

namespace spec\TrafficLight\Color;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RedSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TrafficLight\Color\Red');
        $this->shouldImplement('TrafficLight\Color\Color');
    }
}
