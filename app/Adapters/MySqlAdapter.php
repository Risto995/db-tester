<?php

namespace App\Adapters;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class MySqlAdapter
 *
 * @package App\Adapters
 */
class MySqlAdapter implements DatabaseAdapter
{
    /**
     * Returns a database connection.
     *
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface
    {
        return DB::connection('mysql');
    }

    /**
     * Returns connection type.
     *
     * @return string
     */
    public function getConnectionType(): string
    {
        return 'MySQL';
    }
}
