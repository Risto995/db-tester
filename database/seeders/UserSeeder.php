<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserGroup::all()->each(function ($group) {
            User::factory()
                ->times(1000)
                ->create([
                    'group_id' => $group->id,
                ]);
        });
    }
}
