<?php

namespace jdg223\transportable\Transporter\Contracts;

interface Transporter
{
    /**
     * Connect to Service.
     *
     * @return void
     */
    public function readyTransporter();

    /**
     * Send to destination.
     *
     * @param $passenger
     *
     * @return mixed
     */
    public function sendToDestination($passenger);
}