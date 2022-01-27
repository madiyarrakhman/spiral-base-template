<?php

declare(strict_types=1);

namespace App\Shared\Command;


use Cycle\ORM\ORM;

class CommandDispatcher implements CommandDispatcherInterface
{
    protected $orm;

    public function __construct(ORM $orm)
    {
        $this->orm = $orm;
    }

    public function execute(CommandInterface $command)
    {

    }
}
