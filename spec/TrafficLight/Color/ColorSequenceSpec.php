<?php

namespace spec\TrafficLight\Color;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use TrafficLight\Color\Color;

class ColorSequenceSpec extends ObjectBehavior
{
    function it_is_initializable(
        Color $color1,
        Color $color2,
        Color $color3
    ) {
        $this->beConstructedWith(array($color1, $color2, $color3));

        $this->shouldHaveType('TrafficLight\Color\ColorSequence');
        $this->shouldHaveType('ArrayIterator');
    }

    function it_should_throw_when_an_array_with_non_colors_is_given(
        Color $color1,
        Color $color2,
        Color $color3
    ) {
        $faulty = array($color1, $color2, $color3, 4);
        $this->shouldThrow('InvalidArgumentException')->during__construct($faulty);
    }

    function it_should_automatically_rewind(
        Color $color1,
        Color $color2,
        Color $color3
    ) {
        $this->beConstructedWith(array($color1, $color2, $color3));
        $this->next();
        $this->next();
        $this->next();
        $this->current()->shouldReturn($color1);
    }
}
