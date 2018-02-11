<?php

namespace Transportable\Ports\Base;

use Transportable\Ports\Contracts\RequiresCheckIn;
use Transportable\Ports\Contracts\SecurityCheck;

abstract class MassTransitPortRequiresCheckIn extends MassTransitPort implements RequiresCheckIn, SecurityCheck
{
    private $sentPassengers = [];

    abstract protected function checkInPassenger($currentPassenger);

    public function checkIn()
    {
        foreach ($this->currentPassenger as $passengerLocation => $passenger) {
            //  If passenger passed security check.
            if ($this->runSecurityCheck($passenger) === true) {
                $this->currentPassenger[$passengerLocation] = $this->checkInPassenger($passenger);
            } else {
                // If passenger doesn't pass the security check they are not
                // getting through.
                unset($this->currentPassenger[$passengerLocation]);
            }
        }
    }

    public function transport()
    {
        $this->inTransit();
        $this->refuel();

        do {
            $this->arrive();
            $this->checkIn();
            if (is_array($this->currentPassenger) &&
                count($this->currentPassenger) > 0) {
                $this->sentPassengers[] = $this->leave();
            }
        } while(count($this->currentPassenger) !== 0);

        return $this->sentPassengers;
    }
}