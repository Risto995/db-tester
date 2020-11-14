<?php

namespace App\Factories;

use App\Runners\QueryRunner;
use App\Utility\QueryType;

/**
 * Class RunnerFactory
 *
 * @package App\Factories
 */
abstract class RunnerFactory
{
    /**
     * Instantiates and returns a new query runner.
     *
     * @param string $databaseType
     * @param string $queryType
     * @param string $entityType
     * @param int $numberOfRows
     *
     * @return QueryRunner
     */
    public static function getRunner(
        string $databaseType,
        string $queryType,
        string $entityType,
        int $numberOfRows = 0
    ): QueryRunner
    {
        $adapter = DatabaseAdapterFactory::getDatabaseAdapter($databaseType);

        switch ($queryType) {
            case QueryType::INSERT:
                $queryHandler = InsertQueryFactory::getInsertQuery($entityType, $numberOfRows);
                break;
            case QueryType::UPDATE:
                $queryHandler = UpdateQueryFactory::getUpdateQuery($entityType, $numberOfRows);
                break;
            case QueryType::SELECT:
                $queryHandler = SelectQueryFactory::getSelectQuery($entityType);
                break;
            case QueryType::DELETE:
                $queryHandler = DeleteQueryFactory::getDeleteQuery($entityType, $numberOfRows);
                break;
            default:
                throw new \InvalidArgumentException('Invalid query type specified!');
        }

        return new QueryRunner($queryHandler, $adapter);
    }
}
