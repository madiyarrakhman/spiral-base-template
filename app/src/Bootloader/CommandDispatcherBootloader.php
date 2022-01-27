<?php

declare(strict_types=1);

namespace App\Bootloader;


use App\Shared\Command\Databases\ORM\ReadCommandDispatcher;
use App\Shared\Command\Databases\ORM\WriteCommandDispatcher;
use Cycle\ORM\ORM;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container;

class CommandDispatcherBootloader extends Bootloader
{
    public function boot(Container $container)
    {
        $container->bind(ReadCommandDispatcher::class, function (ORM $orm) {
            return new ReadCommandDispatcher($orm);
        });

        $container->bind(WriteCommandDispatcher::class, function (ORM $orm) {
            return new WriteCommandDispatcher($orm);
        });
    }
}
