<?php

namespace App\Factories;

use App\Queries\DeleteQueryHandler;
use App\Queries\DeleteUsersQueryHandler;
use App\Queries\DeleteUserTagsQueryHandler;
use App\Utility\EntityType;

/**
 * Class DeleteQueryFactory
 *
 * @package App\Factories
 */
abstract class DeleteQueryFactory
{
    /**
     * Instantiates and returns an insert query for the given entity type.
     *
     * @param string $entityType
     * @param int $numberOfRows
     *
     * @return DeleteQueryHandler
     */
    public static function getDeleteQuery(string $entityType, int $numberOfRows): DeleteQueryHandler
    {
        switch ($entityType) {
            case EntityType::USER:
                return new DeleteUsersQueryHandler($numberOfRows);
            case EntityType::TAG_USER:
                return new DeleteUserTagsQueryHandler($numberOfRows);
            default:
                throw new \InvalidArgumentException('Invalid entity type provided');
        }
    }
}
