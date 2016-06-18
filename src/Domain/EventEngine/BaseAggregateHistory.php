<?php

namespace Domain\EventEngine;

abstract class BaseAggregateHistory implements AggregateHistory
{
    /** @var AggregateId */
    protected $aggregateId;

    /** @var DomainEvent[] */
    protected $events;

    public function __construct(AggregateId $aggregateId, EventStorage $eventStorage)
    {
        $this->aggregateId = $aggregateId;
        $this->events = $this->events = $eventStorage->find($aggregateId);
    }

    public function getAggregateId() : AggregateId
    {
        return $this->aggregateId;
    }

    /** @return DomainEvent[] */
    public function getEvents() : array
    {
        return $this->events;
    }
}
