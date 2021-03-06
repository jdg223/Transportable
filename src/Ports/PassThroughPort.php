<?php

namespace Transportable\Ports;

use Transportable\Passengers\Base\Passenger;
use Transportable\Ports\Base\Port;
use Transportable\Transporter\Base\Transporter;

final class PassThroughPort extends Port
{
    public function __construct(Passenger $passenger, Transporter $transporter)
    {
        parent::__construct($passenger, $transporter);
    }
}