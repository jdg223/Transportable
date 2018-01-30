<?php

namespace Transportable\Transporter\Contracts\Base;

interface NeedsFuel
{
    /**
     * Connect to Service.
     *
     * @return void
     */
    public function refuel();
}