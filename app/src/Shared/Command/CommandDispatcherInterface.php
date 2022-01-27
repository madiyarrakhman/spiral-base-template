<?php

declare(strict_types=1);

namespace App\Shared\Command;


interface CommandDispatcherInterface
{
    public function execute(CommandInterface $command);
}
