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
        DB::table('users')->insert([
           'name' => 'Gilvan Turismo',
            'email' => 'gilvanturismopetrolina@gmail.com',
            'password' => Hash::make('Oliveirasantos77'),
        ]);
    }
}
