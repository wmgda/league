<?php

namespace Domain\EventEngine;

interface AggregateId
{
    public function __toString() : string;

    public static function generate() : AggregateId;
}
