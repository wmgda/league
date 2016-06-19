<?php

namespace Domain\Event;

use Domain\Aggregate\AggregateId\UserId;
use Domain\EventEngine\AggregateId;
use Domain\EventEngine\DomainEvent;

class UserWasCreated implements DomainEvent
{
    /** @var UserId */
    private $userId;

    public function __construct(UserId $userId)
    {
        $this->userId = $userId;
    }

    public function getAggregateId() : AggregateId
    {
        return $this->userId;
    }
}
