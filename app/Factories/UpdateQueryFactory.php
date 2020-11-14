<?php

namespace App\Factories;

use App\Queries\UpdateQueryHandler;
use App\Queries\UpdateUsersQueryHandler;
use App\Utility\EntityType;

/**
 * Class UpdateQueryFactory
 *
 * @package App\Factories
 */
abstract class UpdateQueryFactory
{
    /**
     * Instantiates and returns an update query for the given entity type.
     *
     * @param string $entityType
     * @param int $numberOfRows
     *
     * @return UpdateQueryHandler
     */
    public static function getUpdateQuery(string $entityType, int $numberOfRows): UpdateQueryHandler
    {
        switch ($entityType) {
            case EntityType::USER:
                return new UpdateUsersQueryHandler($numberOfRows);
            default:
                throw new \InvalidArgumentException('Invalid entity type provided');
        }
    }
}
