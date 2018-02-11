<?php

namespace Transportable\Passengers\Bags;

use Transportable\Passengers\Base\PassengerHasBags;

class PassengerGivesLastBag extends PassengerHasBags
{
    public function __construct($bags)
    {
        parent::__construct($bags);
    }

    public function arrive()
    {
        return [array_pop($this->bags)];
    }
}