<?php

namespace Firebase\JWT;

class BeforeValidException extends \UnexpectedValueException implements JWTExceptionWithPayloadInterface
{
    /**
     * @var mixed
     */
    protected $payload;

    public function __construct($message, $code = 0, \Throwable $previous = null, $payload = null)
    {
        parent::__construct($message, $code, $previous);
        $this->payload = $payload;
    }

    public function getPayload()
    {
        return $this->payload;
    }
}
