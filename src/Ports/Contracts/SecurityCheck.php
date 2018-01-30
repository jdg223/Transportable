<?php

namespace Transportable\Ports\Contracts;

interface SecurityCheck
{
    /**
     * Validate incoming data.
     *
     * @param $passenger
     *
     * @return mixed
     */
    public function runSecurityCheck($passenger);
}