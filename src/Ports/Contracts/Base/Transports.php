<?php

namespace Transportable\Ports\Contracts\Base;

use Transportable\Passengers\Base\Passenger;
use Transportable\Transporter\Base\Transporter;

interface Transports extends TransportProcess
{
    public function __construct(Passenger $passenger, Transporter $transporter);

    public function transport();
}