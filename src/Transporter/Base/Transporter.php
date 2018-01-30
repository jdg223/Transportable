<?php

namespace Transportable\Transporter\Base;

use Transportable\Transporter\Contracts\Base\NeedsFuel;
use Transportable\Transporter\Contracts\Base\TransportPassenger;

abstract class Transporter implements NeedsFuel, TransportPassenger
{

}