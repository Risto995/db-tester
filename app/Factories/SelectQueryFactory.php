<?php

namespace App\Factories;

use App\Queries\SelectQueryHandler;
use App\Queries\SelectUsersQueryHandler;
use App\Utility\EntityType;

/**
 * Class SelectQueryFactory
 *
 * @package App\Factories
 */
abstract class SelectQueryFactory
{
    /**
     * Instantiates and returns an insert query for the given entity type.
     *
     * @param string $entityType
     *
     * @return SelectQueryHandler
     */
    public static function getSelectQuery(string $entityType): SelectQueryHandler
    {
        switch ($entityType) {
            case EntityType::USER:
                return new SelectUsersQueryHandler();
            default:
                throw new \InvalidArgumentException('Invalid entity type provided');
        }
    }
}
