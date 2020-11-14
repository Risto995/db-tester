<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::all()->each(function ($account) {
            Tag::factory()
                ->times(50)
                ->create([
                    'account_id' => $account->id,
                ]);
        });
    }
}
