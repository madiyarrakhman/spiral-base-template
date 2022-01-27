<?php

declare(strict_types=1);

namespace App\Shared\Command\Databases\ORM;


use App\Shared\Command\CommandDispatcher;

class ReadCommandDispatcher extends CommandDispatcher
{
    /**
     * @param ReadCommandInterface $command
     * @return object|iterable|array|null
     */
    public function execute($command)
    {
        $entityClassname = get_class($command->getEntity());
        $select = $this->orm->getRepository($entityClassname)->select();
        return $command->make($select);
    }
}
