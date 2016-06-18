<?php

namespace Domain\EventEngine;

interface AggregateHistory
{
    /** @return DomainEvent[] */
    public function getEvents() : array;

    public function getAggregateId() : AggregateId;
}
