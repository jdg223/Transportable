<?php

namespace Transportable\Passengers\Contracts\Base;

interface Arrives extends InTransit
{
    /**
     * Gather Data.
     *
     * @return array
     */
    public function arrive();
}