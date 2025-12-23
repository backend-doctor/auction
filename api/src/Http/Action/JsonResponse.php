<?php

namespace App\Http\Action;

use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Response;

class JsonResponse extends Response
{
    /**
     * Summary of __construct
     * @param array$data
     * @param int $status
     */
    public function __construct($data, int $status = 200)
    {
        parent::__construct(
            $status,
            new Headers(['Content-type' => 'application/json']),
            (new StreamFactory())->createStream(json_encode($data, JSON_THROW_ON_ERROR))
        );
    }
}
