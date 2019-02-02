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
        DB::table('admins')->insert([
           'name' => 'Herbet Junior',
            'email' => 'herbet@herbet',
            'password' => Hash::make('herbetjr'),
        ]);
    }
}
