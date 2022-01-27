<?php

declare(strict_types=1);

namespace App\Shared\Command\Databases\ORM;


use App\Shared\Command\CommandDispatcher;
use Cycle\ORM\Transaction;

class WriteCommandDispatcher extends CommandDispatcher
{
    /**
     * @param WriteCommandInterface $command
     */
    public function execute($command)
    {
        $transaction = new Transaction($this->orm);
        $transaction->persist($command->getEntity());

        try {
            $transaction->run();
        } catch (\Throwable $e) {

        }
    }
}
