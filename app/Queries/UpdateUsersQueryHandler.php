<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;
use Faker\Factory;

/**
 * Class UpdateUsersQueryHandler
 *
 * @package App\Queries
 */
class UpdateUsersQueryHandler extends UpdateQueryHandler
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
        $faker = Factory::create();

        for ($i = 0; $i < $this->numberOfRows; $i++) {
            $name = $faker->firstName;

            $adapter->getConnection()->update("update users set name = '$name' where id = ?", [random_int(1, 5000)]);
        }
    }
}
