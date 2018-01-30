<?php

namespace Transportable\Ports\Contracts\Base;

interface TransportProcess
{
    public function inTransit();

    public function arrive();

    public function refuel();

    public function leave();
}