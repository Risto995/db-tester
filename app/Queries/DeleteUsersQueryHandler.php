<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;

/**
 * Class DeleteUsersQueryHandler
 *
 * @package App\Queries
 */
class DeleteUsersQueryHandler extends DeleteQueryHandler
{
    /**
     * Executes the query.
     *
     * @param DatabaseAdapter $adapter
     *
     * @throws \Exception
     */
    public function execute(DatabaseAdapter $adapter): void
    {
        for ($i = 0; $i < $this->numberOfRows; $i++) {
            $id = random_int(1, 100000);
            $adapter->getConnection()->delete('delete from users where id = :id', ['id' => $id]);
        }
    }
}
