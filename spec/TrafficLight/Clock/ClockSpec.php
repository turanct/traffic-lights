<?php

namespace spec\TrafficLight\Clock;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TrafficLight\Clock\Tick;
use TrafficLight\Clock\UsesClock;

class ClockSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('TrafficLight\Clock\Clock');
    }

    function it_can_be_told_to_tick()
    {
        $this->tick()->shouldBeLike(new Tick());
    }

    function it_notifies_listeners_of_ticks(UsesClock $listener)
    {
        $listener->clockTicked(new Tick())->shouldBeCalled();

        $this->subscribe($listener);
        $this->tick();
    }
}
