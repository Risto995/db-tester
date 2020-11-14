<?php

namespace App\Queries;

use App\Adapters\DatabaseAdapter;

/**
 * Class ComplexSelectUsersQueryHandler
 *
 * @package App\Queries
 */
class ComplexSelectUsersQueryHandler extends SelectQueryHandler
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
        $data = [
            'group_id' => random_int(1, 1000),
            'account_id' => random_int(1, 1000),
        ];

        $tagIds = implode(',', [
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
            random_int(1,50000),
        ]);

        $adapter->getConnection()->select("select * from users AS u
                    JOIN tag_user AS tu ON u.id = tu.user_id
                    JOIN tags AS t ON tu.tag_id = t.id
                    JOIN user_groups AS g ON u.group_id = g.id
                    JOIN accounts AS a ON g.account_id = a.id
                    WHERE g.id = :group_id
                    AND a.id = :account_id
                    AND t.id IN ($tagIds)",
            $data);
    }
}
