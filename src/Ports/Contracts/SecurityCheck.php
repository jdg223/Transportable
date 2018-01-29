<?php

namespace jdg223\transportable\Ports\Contracts;

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