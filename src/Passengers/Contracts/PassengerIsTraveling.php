<?php

namespace jdg223\transportable\Passengers\Contracts;

interface PassengerIsTraveling
{
    /**
     * Connect to service.
     *
     * @return void
     */
    public function isInTransit();

    /**
     * Gather Data.
     *
     * @return array
     */
    public function arrive();
}