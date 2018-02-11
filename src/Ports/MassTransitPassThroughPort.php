<?php

namespace Transportable\Ports;

use Transportable\Passengers\Base\Passenger;
use Transportable\Transporter\Base\Transporter;
use Transportable\Ports\Base\MassTransitPort;

final class MassTransitPassThroughPort extends MassTransitPort
{
    public function __construct(Passenger $passenger, Transporter $transporter)
    {
        parent::__construct($passenger, $transporter);
    }
}