<?php

declare(strict_types=1);

namespace App\Shared\Resource;


use stdClass;

class Resource implements ResourceInterface
{
    protected $data;

    public function setResponseData($data): void
    {
        $this->data = $data;
    }

    public function getInputObject(): object
    {
        return new stdClass();
    }

    public function getResponse(): array
    {
        return [];
    }
}
