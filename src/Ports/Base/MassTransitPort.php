<?php

namespace Transportable\Ports\Base;

use Transportable\Passengers\Base\Passenger;
use Transportable\Transporter\Base\Transporter;

abstract class MassTransitPort extends Port
{
    protected $currentPassenger;

    private $sentPassengers = [];

    public function __construct(Passenger $passenger, Transporter $transporter)
    {
        parent::__construct($passenger, $transporter);
    }

    public function arrive()
    {
        $this->currentPassenger = $this->passenger->arrive();
    }

    public function leave()
    {
        return $this->transporter->sendToDestination($this->currentPassenger);
    }

    public function transport()
    {
        $this->inTransit();
        $this->refuel();

        do {
            $this->arrive();
            if (is_array($this->currentPassenger) &&
                count($this->currentPassenger) > 0) {
                $this->sentPassengers[] = $this->leave();
            }
        } while(count($this->currentPassenger) !== 0);

        return $this->sentPassengers;
    }
}