<?php

declare(strict_types=1);

namespace App\Shared\Resource\Ports\Http;

use App\Shared\Resource\Resource;
use Spiral\Domain\Exception\InvalidFilterException;
use Spiral\Filters\FilterInterface;
use stdClass;

class HttpResource extends Resource
{
    protected $filter;
    protected $status = 200;
    protected $message = 'Успешно';

    public function __construct(FilterInterface $filter)
    {
        $this->filter = $filter;
    }

    public function getInputObject(): object
    {
        if (!$this->filter->isValid()) {
            $this->status = 400;
            $this->message = 'В запросе имееются ошибки';
            throw new InvalidFilterException($this->filter);
        }

        return new stdClass();
    }

    public function getResponse(): array
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->data
        ];
    }
}
