<?php

namespace App\Shared\Resource;

interface ResourceInterface
{
    public function setResponseData($data): void;

    public function getInputObject(): object;

    public function getResponse(): array;
}
