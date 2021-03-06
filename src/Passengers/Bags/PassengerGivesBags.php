<?php

namespace Transportable\Passengers\Bags;

use Transportable\Passengers\Base\PassengerHasBags;

class PassengerGivesBags extends PassengerHasBags
{
    public function __construct($bags)
    {
        parent::__construct($bags);
    }

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