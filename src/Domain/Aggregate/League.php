<?php

namespace Modules\League\Domain;

use Domain\EventEngine\Aggregate;
use Domain\EventEngine\AggregateId;
use Domain\EventEngine\EventSourced;

class League implements Aggregate
{
    use EventSourced;

    /** @var LeagueId */
    private $leagueId;

    /** @var string */
    private $name;

    public function getAggregateId() : AggregateId
    {
        return $this->leagueId;
    }
}
