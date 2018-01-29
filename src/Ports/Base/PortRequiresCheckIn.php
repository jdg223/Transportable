<?php

namespace jdg223\transportable\Ports\Base;

use jdg223\transportable\Ports\Contracts\SecurityCheck;
use jdg223\transportable\Ports\Contracts\RequiresCheckIn;

abstract class PortRequiresCheckIn extends Port implements RequiresCheckIn, SecurityCheck
{
    /**
     * Check in a single passenger.
     *
     * @param $passenger
     *
     * @return mixed
     */
    abstract public function checkInPassenger($passenger);

    public function checkIn()
    {
        foreach ($this->passenger as $passengerLocation => $passenger) {
            $this->runSecurityCheck($passenger);
            $this->passenger[$passengerLocation] = $this->checkInPassenger($passenger);
        }
    }

    /**
     * Transport function is modified to include new step.
     *
     * @return mixed
     */
    public function transport()
    {
        $this->inTransit();
        $this->arrive();
        $this->checkIn();
        return $this->leave();
    }
}