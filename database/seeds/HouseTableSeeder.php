<?php

use Illuminate\Database\Seeder;

use App\Models\House;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++) {
            $title = 'Sweet home ' . $i;
            House::firstOrCreate([
                'title' => $title
            ]);

        }
    }
}
