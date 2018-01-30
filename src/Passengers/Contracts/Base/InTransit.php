<?php

namespace Transportable\Passengers\Contracts\Base;

interface InTransit
{
    /**
     * Connect to service.
     *
     * @return void
     */
    public function isInTransit();
}