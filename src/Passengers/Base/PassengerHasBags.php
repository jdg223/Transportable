<?php

namespace Transportable\Passengers\Base;

use Transportable\Passengers\Contracts\HasBaggage;

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