<?php

namespace spec\TrafficLight;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TrafficLight\Clock\Clock;
use TrafficLight\Clock\Tick;
use TrafficLight\Color\Color;
use TrafficLight\Color\ColorSequence;

class TrafficLightSpec extends ObjectBehavior
{
    function it_is_initializable(Clock $clock, ColorSequence $colorSequence)
    {
        $this->beConstructedWith($clock, $colorSequence);
        $this->shouldHaveType('TrafficLight\TrafficLight');
        $this->shouldImplement('TrafficLight\Clock\UsesClock');
    }

    function it_should_advance_its_sequence_pointer_when_clock_ticked(Clock $clock, ColorSequence $colorSequence)
    {
        $colorSequence->next()->shouldBeCalled();

        $this->beConstructedWith($clock, $colorSequence);

        $this->clockTicked(new Tick());
    }

    function it_should_return_its_color(Clock $clock, ColorSequence $colorSequence, Color $color)
    {
        $colorSequence->current()->willReturn($color);

        $this->beConstructedWith($clock, $colorSequence);

        $this->activeColor()->shouldBeLike($color);
    }
}
