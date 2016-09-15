<?php

namespace Invit\PlivoBundle\Helper;

use Plivo\RestAPI;
use Symfony\Component\HttpFoundation\Request;

class PlivoHelper
{
    /**
     * @var string
     */
    private $authToken;

    /**
     * @param string $authToken
     */
    public function __construct(string $authToken){
        $this->authToken = $authToken;
    }

    /**
     * @param Request $request
     *
     * @return bool
     */
    public function validateRequest(Request $request) : bool
    {
        return RestAPI::validate_signature(
            $request->getUri(),
            $request->request->all(),
            $request->headers->get('X-Plivo-Signature'),
            $this->authToken
        );
    }
}
