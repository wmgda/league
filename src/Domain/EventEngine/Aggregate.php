<?php

namespace Domain\EventEngine;

interface Aggregate
{
    /** @return DomainEvent[] */
    public function getEvents() : array;

    public function getAggregateId() : AggregateId;

    public static function reconstituteFrom(AggregateHistory $aggregateHistory) : Aggregate;
}
