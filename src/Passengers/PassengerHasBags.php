<?php

namespace Transportable\Passengers;

use Transportable\Passengers\Contracts\HasBaggage;
use Transportable\Passengers\Base\Passenger;

final class PassengerHasBags extends Passenger implements HasBaggage
{
    private $bags;

    public function __construct($bags)
    {
        $this->bags = $bags;
    }

    /**
     * Connect to service.
     *
     * @return void
     */
    public function isInTransit() {}

    /**
     * Gather Data.
     *
     * @return array
     */
    public function arrive()
    {
        return $this->bags;
    }
}