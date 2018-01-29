<?php

namespace jdg223\transportable\Ports\Contracts;

interface RequiresCheckIn
{
    /**
     * Handles entire check in process.
     *
     * @return mixed
     */
    public function checkIn();
}