<?php

namespace App\Adapters;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class PostgresAdapter
 *
 * @package App\Adapters
 */
class PostgresAdapter implements DatabaseAdapter
{
    /**
     * Returns a database connection.
     *
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface
    {
        return DB::connection('pgsql');
    }

    /**
     * Returns connection type.
     *
     * @return string
     */
    public function getConnectionType(): string
    {
        return 'PostgreSQL';
    }
}
