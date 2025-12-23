<?php

declare(strict_types=1);

namespace App\Http\Action;

use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Psr7\Factory\ResponseFactory;
use stdClass;

class HomeAction implements RequestHandlerInterface
{
    private ResponseFactory $factory;
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->factory = $responseFactory;
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse(new stdClass());
    }
}
