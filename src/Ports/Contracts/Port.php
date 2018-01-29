<?php

namespace jdg223\transportable\Transports\Contracts;

interface Port
{
    public function inTransit();

    public function arrive();

    public function leave();

    public function transport();
}