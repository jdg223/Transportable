<?php

namespace Transportable\Ports\Base;

use Transportable\Ports\Contracts\Base\Transports;
use Transportable\Passengers\Base\Passenger;
use Transportable\Transporter\Base\Transporter;

abstract class Port implements Transports
{
    /**
     * @var Passenger
     */
    public $passenger;

    /**
     * @var Transporter
     */
    public $transporter;

    public function __construct(Passenger $passenger, Transporter $transporter)
    {
        $this->passenger = $passenger;
        $this->transporter = $transporter;
    }

    public function inTransit()
    {
        // Connect to service.
        $this->passenger->isInTransit();
    }

    public function arrive()
    {
        // Gather data needed to process request.
        $this->passenger = $this->passenger->arrive();
    }

    public function refuel()
    {
        // Connect to service.
        $this->transporter->refuel();
    }

    public function leave()
    {
        // Transport data to destination.
        return $this->transporter->sendToDestination($this->passenger);
    }

    public function transport()
    {
        $this->inTransit();
        $this->arrive();
        $this->refuel();
        return $this->leave();
    }
}