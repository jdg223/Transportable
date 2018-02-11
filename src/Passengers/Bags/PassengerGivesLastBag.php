<?php

namespace Transportable\Passengers\Bags;

class PassengerGivesLastBag extends PassengerHasBags
{
    public function __construct($bags)
    {
        parent::__construct($bags);
    }

    public function arrive()
    {
        return array_pop($this->bags);
    }
}