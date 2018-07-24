<?php

use Illuminate\Database\Seeder;

class RestdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Restdata::class, 10)->create();
    }
}
