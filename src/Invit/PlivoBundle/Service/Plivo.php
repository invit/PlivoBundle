<?php
namespace Invit\PlivoBundle\Service;

use Plivo\RestAPI;

class Plivo extends RestAPI {

    public function __construct($authId, $authToken){
        parent::__construct($authId, $authToken);
    }
} 