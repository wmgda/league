<?php

namespace Domain\EventEngine;

interface EventStorage
{
    public function add(Aggregate $aggregate);

    /** @return DomainEvent[] */
    public function find(AggregateId $aggregateId) : array;

    /** @return DomainEvent[] */
    public function getAll() : array;
}
