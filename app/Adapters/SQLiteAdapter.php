<?php

namespace App\Adapters;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class SQLiteAdapter
 *
 * @package App\Adapters
 */
class SQLiteAdapter implements DatabaseAdapter
{
    /**
     * Returns a database connection.
     *
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface
    {
        return DB::connection('sqlite');
    }

    /**
     * Returns connection type.
     *
     * @return string
     */
    public function getConnectionType(): string
    {
        return 'SQLite';
    }
}
