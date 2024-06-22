<?php

namespace ZikraAuliya\FlipConnector\Auth;

use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

class FlipBasicAuthentication implements Authenticator
{
    /**
     * Constructor
     */
    public function __construct(
        public string $secretKey,
    ) {}

    /**
     * Apply the authentication to the request.
     */
    public function set(PendingRequest $pendingRequest): void
    {
        $pendingRequest->headers()->add('Authorization', 'Basic '.base64_encode($this->secretKey.':'));
    }
}
