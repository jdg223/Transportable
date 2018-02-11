<?php

namespace Transportable\Passengers\Bags;

use Transportable\Passengers\Contracts\HasBaggage;
use Transportable\Passengers\Base\Passenger;

abstract class PassengerHasBags extends Passenger implements HasBaggage
{
    protected $bags;

    public function __construct($bags)
    {
        $this->bags = $bags;
    }

    /**
     * Nothing to connect to.
     *
     * @return void
     */
    public function isInTransit() {}
}