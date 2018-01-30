<?php

namespace Transportable\Transporter\Contracts\Base;

interface TransportPassenger
{
    /**
     * Send passenger to destination.
     *
     * @param $passenger
     *
     * @return mixed
     */
    public function sendToDestination($passenger);
}