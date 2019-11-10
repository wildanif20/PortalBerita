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
        // $this->call(UsersTableSeeder::class);

        // $this->call RolesTableSeeder;
        $this->call(RoleTableSeeder::class);

        // $this->call UsersTableSeeder;
        $this->call(UserTableSeeder::class);
    }
}
