<?php

namespace Domain\Aggregate\AggregateId;

use Domain\EventEngine\AggregateId;
use Ramsey\Uuid\Uuid;

class SeasonId implements AggregateId
{
    /** @var string */
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public static function fromString(string $string) : self
    {
        $selfId = new self($string);
        return $selfId;
    }

    public function __toString() : string
    {
        return $this->id;
    }

    public static function generate() : AggregateId
    {
        Uuid::uuid1();
    }
}
