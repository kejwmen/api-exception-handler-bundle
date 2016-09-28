<?php

namespace kejwmen\ExceptionHandlerBundle\Controller;

use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;

class ExceptionController
{
    private $debug;

    public function __construct($debug)
    {
        $this->debug = $debug;
    }

    public function createResponse(Request $request, FlattenException $exception, DebugLoggerInterface $logger = null)
    {
        $code = $exception->getStatusCode();

        $message = [
            'status_code' => $code,
            'status_text' => isset(JsonResponse::$statusTexts[$code]) ? JsonResponse::$statusTexts[$code] : '',
            'message' => $exception->getMessage()
        ];

        if (true === $this->debug) {
            $message['debug'] = $exception->toArray();
        }

        return new JsonResponse($message);
    }
}
