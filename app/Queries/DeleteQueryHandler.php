<?php

namespace App\Queries;

use App\Utility\QueryType;

/**
 * Class DeleteQueryHandler
 *
 * @package App\Queries
 */
abstract class DeleteQueryHandler extends BaseQueryHandler
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
    function getQueryType(): string
    {
        return QueryType::DELETE;
    }
}
