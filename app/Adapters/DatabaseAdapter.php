<?php

namespace App\Adapters;

use Illuminate\Database\ConnectionInterface;

/**
 * Interface DatabaseAdapter
 *
 * @package App\Adapters
 */
interface DatabaseAdapter
{
    /**
     * Returns a database connection.
     *
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface;
    /**
     * Returns connection type.
     *
     * @return string
     */
    public function getConnectionType(): string;
}
