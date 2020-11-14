<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;
use Faker\Factory;

/**
 * Class InsertUsersQuery
 *
 * @package App\Queries
 */
class InsertUsersQueryHandler extends InsertQueryHandler
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
            $data = [
                $faker->firstName,
                $faker->email,
                $faker->password,
                random_int(1,5000)
            ];

            $adapter->getConnection()->insert("insert into users (name, email, password, group_id) values (?, ?, ?, ?)", $data);
        }
    }
}
