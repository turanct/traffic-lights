<?php

namespace spec\TrafficLight\Color;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OrangeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TrafficLight\Color\Orange');
        $this->shouldImplement('TrafficLight\Color\Color');
    }
}
