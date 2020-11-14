<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Database\Seeder;

class UserTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * @throws \Exception
     */
    public function run()
    {
        User::all()->each(function ($user) {
            $group = UserGroup::find($user->group_id)->first();
            $account = Account::find($group->account_id)->first();
            $firstTagId = Tag::where('account_id', $account->id)->first()->id;
            $lastTagId = $firstTagId + 9;
            $tags = Tag::find([
                random_int($firstTagId, $lastTagId),
                random_int($firstTagId, $lastTagId),
                random_int($firstTagId, $lastTagId),
                random_int($firstTagId, $lastTagId),
                random_int($firstTagId, $lastTagId)
            ]);

            /** @var User $user */
            $user->tags()->attach($tags);
        });
    }
}
