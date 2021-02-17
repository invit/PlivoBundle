<?php
declare(strict_types=1);

namespace Invit\PlivoBundle\Helper;

use Plivo\Util\signatureValidation;
use Symfony\Component\HttpFoundation\Request;

class PlivoHelper
{
    private string $authToken;

    public function __construct(string $authToken)
    {
        $this->authToken = $authToken;
    }

    public function validateRequest(Request $request) : bool
    {
        return signatureValidation::validateSignature(
            $request->getUri(),
            $request->headers->get('X-Plivo-Signature-V2-Nonce'),
            $request->headers->get('X-Plivo-Signature-V2'),
            $this->authToken
        );
    }
}
