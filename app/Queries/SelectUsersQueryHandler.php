<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;

/**
 * Class SelectUsersQueryHandler
 *
 * @package App\Queries
 */
class SelectUsersQueryHandler extends SelectQueryHandler
{
    /**
     * Executes the query.
     *
     * @param DatabaseAdapter $adapter
     */
    public function execute(DatabaseAdapter $adapter): void
    {
        $adapter->getConnection()->select("select * from users");
    }
}
