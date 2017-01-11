<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('skills')->insert([
            array(
                'name'       => 'HTML/CSS',
                'slug'       => 'html-css',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'Javascript',
                'slug'       => 'javascipt',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'WordPress',
                'slug'       => 'wordpress',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'PHP',
                'slug'       => 'php',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'Yii',
                'slug'       => 'yii',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'Laravel',
                'slug'       => 'laravel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => '.NET',
                'slug'       => 'net',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'name'       => 'Android',
                'slug'       => 'android',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()),
            array(
                'name'       => 'C',
                'slug'       => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ]);
    }
}
