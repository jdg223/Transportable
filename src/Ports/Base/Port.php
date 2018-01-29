<?php

namespace jdg223\transportable\Ports\Base;

use jdg223\transportable\Transports\Contracts\Port as PortInterface;
use jdg223\transportable\Passengers\Contracts\PassengerIsTraveling;
use jdg223\transportable\Transporter\Contracts\Transporter;

abstract class Port implements PortInterface
{
    /**
     * @var PassengerIsTraveling
     */
    public $passenger;

    /**
     * @var Transporter
     */
    public $transporter;

    public function __construct(PassengerIsTraveling $passenger, Transporter $transporter)
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

    public function leave()
    {
        // Connect to service.
        $this->transporter->readyTransporter();

        // Transport data to destination.
        return $this->transporter->sendToDestination($this->passenger);
    }

    public function transport()
    {
        $this->inTransit();
        $this->arrive();
        return $this->leave();
    }
}