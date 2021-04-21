<?php

namespace Database\Seeders;
use App\Models\Change;
use Illuminate\Database\Seeder;

class ChangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Change::factory(10)->create();
    }
}
