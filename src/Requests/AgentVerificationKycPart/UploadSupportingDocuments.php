<?php

namespace ZikraAuliya\FlipConnector\Requests\AgentVerificationKycPart;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload Supporting Documents
 */
class UploadSupportingDocuments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/documents';
    }

    public function __construct() {}
}
