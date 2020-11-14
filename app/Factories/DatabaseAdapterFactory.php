<?php

namespace App\Factories;

use App\Adapters\DatabaseAdapter;
use App\Adapters\MySqlAdapter;
use App\Adapters\PostgresAdapter;
use App\Adapters\SQLiteAdapter;
use App\Utility\DatabaseAdapterType;

/**
 * Class DatabaseAdapterFactory
 *
 * @package App\Factories
 */
abstract class DatabaseAdapterFactory
{
    /**
     * Instantiates and returns database adapter based on the provided database type.
     *
     * @param string $databaseType
     *
     * @return DatabaseAdapter
     */
    public static function getDatabaseAdapter(string $databaseType): DatabaseAdapter
    {
        switch ($databaseType) {
            case DatabaseAdapterType::MYSQL:
                return new MySqlAdapter();
            case DatabaseAdapterType::POSTGRES:
                return new PostgresAdapter();
            case DatabaseAdapterType::SQLITE:
                return new SQLiteAdapter();
            default:
                throw new \InvalidArgumentException('Invalid DBMS type specified!');
        }
    }
}
