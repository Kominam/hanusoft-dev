<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SkillUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_user')->insert([
            array(
                'user_id'    => 1,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 1,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 1,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 1,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array(
                'user_id'    => 2,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 2,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 2,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 2,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array(
                'user_id'    => 3,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 3,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 3,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 3,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array(
                'user_id'    => 4,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 4,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 4,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 4,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array(
                'user_id'    => 5,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 5,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 5,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 5,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array(
                'user_id'    => 6,
                'skill_id'   => 1,
                'value'      => 75,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 6,
                'skill_id'   => 2,
                'value'      => 85,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 6,
                'skill_id'   => 3,
                'value'      => 65,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'user_id'    => 6,
                'skill_id'   => 4,
                'value'      => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

            array('user_id' => 7, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 7, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 7, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 7, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 8, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 8, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 8, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 8, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 9, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 9, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 9, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 9, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 10, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 10, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 10, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 10, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 11, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 11, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 11, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 11, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 12, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 12, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 12, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 12, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),

            array('user_id' => 13, 'skill_id' => 1, 'value' => 75, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 13, 'skill_id' => 2, 'value' => 85, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 13, 'skill_id' => 3, 'value' => 65, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('user_id' => 13, 'skill_id' => 4, 'value' => 90, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        ]);
    }
}
