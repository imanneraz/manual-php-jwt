<?php

namespace Firebase\JWT;

interface JWTExceptionWithPayloadInterface
{
    /**
     * @return mixed
     */
    public function getPayload();
}
