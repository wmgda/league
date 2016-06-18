<?php

namespace Domain\EventEngine;

interface DomainEvent
{
    public function getAggregateId() : AggregateId;
}
