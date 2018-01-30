<?php

namespace Transportable\Passengers\Contracts;

interface HasBaggage
{
    public function __construct($bags);
}