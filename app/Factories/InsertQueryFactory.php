<?php

namespace App\Factories;

use App\Queries\InsertQueryHandler;
use App\Queries\InsertUsersQueryHandler;
use App\Utility\EntityType;

abstract class InsertQueryFactory
{
    /**
     * Instantiates and returns an insert query for the given entity type.
     *
     * @param string $entityType
     * @param int $numberOfRows
     *
     * @return InsertQueryHandler
     */
    public static function getInsertQuery(string $entityType, int $numberOfRows): InsertQueryHandler
    {
        switch ($entityType) {
            case EntityType::USER:
                return new InsertUsersQueryHandler($numberOfRows);
            default:
                throw new \InvalidArgumentException('Invalid entity type provided');
        }
    }
}
