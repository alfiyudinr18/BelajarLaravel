<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call([
            PostsTableSeeder::class,
            StudentSeeder::class,
            BarangSeeder::class
        ]);
        factory(App\Tabungan::class, 100)->create();
        factory(App\Customer::class, 1000)->create();
    }
}
