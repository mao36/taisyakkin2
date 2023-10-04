<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'grouping_user_id' => 1,
            'group_name' => 'グループ1'
        ]);

        Group::create([
            'grouping_user_id' => 2,
            'group_name' => 'グループ2'
        ]);
    }
}
