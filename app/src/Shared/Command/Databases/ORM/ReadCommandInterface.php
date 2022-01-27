<?php

declare(strict_types=1);

namespace App\Shared\Command\Databases\ORM;


use App\Shared\Command\CommandInterface;
use Cycle\ORM\Select;

interface ReadCommandInterface extends CommandInterface
{
    /**
     * @param Select $select
     * @return object|iterable|array|null
     */
    public function make(Select $select);
}
