<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;

/**
 * Class BaseQuery
 *
 * @package App\Queries
 */
abstract class BaseQueryHandler
{
    /**
     * Returns the type of the query.
     *
     * @return string
     */
    abstract function getQueryType(): string;

    /**
     * Executes the query.
     *
     * @param DatabaseAdapter $adapter
     */
    abstract public function execute(DatabaseAdapter $adapter): void;
}
