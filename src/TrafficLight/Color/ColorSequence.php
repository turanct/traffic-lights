<?php

namespace TrafficLight\Color;

use ArrayIterator;
use InvalidArgumentException;

class ColorSequence extends ArrayIterator
{
    private $sequence;

    public function __construct(array $sequence)
    {
        foreach($sequence as $color) {
            if (!$color instanceof Color) {
                throw new InvalidArgumentException('Please provide an array of colors.');
            }
        }

        $this->sequence = array_values($sequence);

        parent::__construct($this->sequence);
    }

    public function next()
    {
        if ($this->key() + 1  == count($this->sequence)) {
            $this->rewind();
        } else {
            parent::next();
        }
    }
}
