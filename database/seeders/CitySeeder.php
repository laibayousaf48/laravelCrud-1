<?php

namespace Database\Seeders;

use App\Models\city;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/city.json');
        $cities = collect(json_decode($json));
        $cities->each(function($city){
            city::create([
                'id' => $city->id,
                'city' => $city->name,
            ]);
        });
    }
}
