<?php

namespace App\Queries;

use App\Utility\QueryType;

/**
 * Class InsertQuery
 *
 * @package App\Queries
 */
abstract class InsertQueryHandler extends BaseQueryHandler
{
    /**
     * @var int
     */
    protected $numberOfRows;

    /**
     * InsertQuery constructor.
     *
     * @param int $numberOfRows
     */
    public function __construct(int $numberOfRows)
    {
        $this->numberOfRows = $numberOfRows;
    }

    /**
     * Returns the type of the query.
     *
     * @return string
     */
    public function getQueryType(): string
    {
        return QueryType::INSERT;
    }
}
