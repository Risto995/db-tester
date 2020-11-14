<?php

namespace App\Queries;

use App\Utility\QueryType;

/**
 * Class SelectQueryHandler
 *
 * @package App\Queries
 */
abstract class SelectQueryHandler extends BaseQueryHandler
{
    /**
     * Returns the type of the query.
     *
     * @return string
     */
    public function getQueryType(): string
    {
        return QueryType::SELECT;
    }
}
