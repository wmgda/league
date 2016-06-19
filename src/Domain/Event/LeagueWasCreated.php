<?php

namespace Domain\Event;

use Carbon\Carbon;
use Domain\Aggregate\AggregateId\LeagueId;
use Domain\EventEngine\AggregateId;
use Domain\EventEngine\DomainEvent;

class LeagueWasCreated implements DomainEvent
{
    /** @var LeagueId */
    private $leagueId;

    /** @var Carbon */
    private $createdAt;

    public function __construct(LeagueId $leagueId, Carbon $createdAt)
    {
        $this->leagueId = $leagueId;
    }

    public function getAggregateId() : AggregateId
    {
        return $this->leagueId;
    }
}
