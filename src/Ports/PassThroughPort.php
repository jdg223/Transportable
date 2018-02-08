<?php

namespace Transportable\Ports;

use Transportable\Passengers\Base\Passenger;
use Transportable\Ports\Base\Port;
use Transportable\Transporter\Base\Transporter;

class PassThroughPort extends Port
{
    public function __construct(Passenger $passenger, Transporter $transporter)
    {
        $this->passenger = $passenger;
        $this->transporter = $transporter;
    }
}