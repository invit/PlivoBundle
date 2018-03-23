<?php
declare(strict_types=1);

namespace Invit\PlivoBundle\Helper;

use Invit\PlivoBundle\Service\PlivoApi;
use Symfony\Component\HttpFoundation\Request;

class PlivoHelper
{
    private $authToken;

    public function __construct(string $authToken)
    {
        $this->authToken = $authToken;
    }

    public function validateRequest(Request $request) : bool
    {
        return PlivoApi::validate_signature(
            $request->getUri(),
            $request->request->all(),
            $request->headers->get('X-Plivo-Signature'),
            $this->authToken
        );
    }
}
