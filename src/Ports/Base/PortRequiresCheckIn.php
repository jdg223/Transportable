<?php

namespace Transportable\Ports\Base;

use Transportable\Ports\Contracts\SecurityCheck;
use Transportable\Ports\Contracts\RequiresCheckIn;

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
            //  If passenger passed security check.
            if ($this->runSecurityCheck($passenger) === true) {
                $this->passenger[$passengerLocation] = $this->checkInPassenger($passenger);
            } else {
                // If passenger doesn't pass the security check they are not
                // getting through.
                unset($this->passenger[$passengerLocation]);
            }
        }
    }

    /**
     * Transport method is modified
     * to include new step.
     *
     * @return mixed
     */
    public function transport()
    {
        $this->inTransit();
        $this->arrive();
        $this->checkIn();
        $this->refuel();
        return $this->leave();
    }
}