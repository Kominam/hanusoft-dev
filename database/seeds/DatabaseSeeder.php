<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SkillTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SkillUserTableSeeder::class);
        $this->call(ProjectUserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostTableSeeder::class);
    }
}
