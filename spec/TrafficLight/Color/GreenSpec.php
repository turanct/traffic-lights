<?php

namespace spec\TrafficLight\Color;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreenSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TrafficLight\Color\Green');
        $this->shouldImplement('TrafficLight\Color\Color');
    }
}
