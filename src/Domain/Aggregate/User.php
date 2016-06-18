<?php

namespace Domain\Aggregate;

use Domain\EventEngine\Aggregate;
use Domain\EventEngine\AggregateId;
use Domain\EventEngine\EventSourced;

class User implements Aggregate
{
    use EventSourced;

    public function getAggregateId() : AggregateId
    {
        // TODO: Implement getAggregateId() method.
    }
}
