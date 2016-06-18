<?php

namespace Domain\EventEngine;

trait EventSourced
{
    /** @var DomainEvent[] */
    protected $events = [];

    /** @return DomainEvent[] */
    public function getEvents() : array
    {
        return $this->events;
    }

    protected function recordThat(DomainEvent $event)
    {
        $this->events[] = $event;
    }

    private function apply(DomainEvent $event)
    {
        $method = explode('\\', get_class($event));
        $method = 'apply' . end($method);
        $this->$method($event);
    }

    abstract public function getAggregateId() : AggregateId;

    public static function create()
    {
        throw new \Exception('Method create was not implemented in class: '.self::class);
    }

    public static function reconstituteFrom()
    {
        throw new \Exception('Method reconstituteFrom was not implemented in class: '.self::class);
    }
}
