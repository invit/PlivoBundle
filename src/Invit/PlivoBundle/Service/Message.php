<?php
namespace Invit\NexmoBundle\Service;


class Message extends \NexmoMessage {

    public function __construct($apiKey, $apiSecret){
        parent::NexmoMessage($apiKey, $apiSecret);
    }
} 