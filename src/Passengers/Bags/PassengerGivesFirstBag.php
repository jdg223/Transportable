<?php

namespace Transportable\Passengers\Bags;

use Transportable\Passengers\Base\PassengerHasBags;

class PassengerGivesFirstBag extends PassengerHasBags
{
    public function __construct($bags)
    {
        parent::__construct($bags);
    }

    public function arrive()
    {
        return [array_shift($this->bags)];
    }
}