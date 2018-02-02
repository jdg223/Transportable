<?php

namespace Transportable\Ports\Contracts;

interface SecurityCheck
{
    /**
     * Validate incoming data.
     *
     * @param $passenger
     *
     * @return boolean
     */
    public function runSecurityCheck($passenger);
}