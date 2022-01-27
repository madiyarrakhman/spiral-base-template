<?php

namespace App\Shared\Command;

interface CommandInterface
{
    public function getEntity(): object;
}
