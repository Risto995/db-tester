<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::all()->each(function ($account) {
            UserGroup::factory()
                ->times(5)
                ->create([
                    'account_id' => $account->id,
                ]);
        });
    }
}
