<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    public function run(): void
    {
        $cities = [
            'Київ',
            'Львів',
            'Харків',
            'Дніпро',
            'Житомир',
            'Рівне',
            'Луганськ',
            'Донецьк',
            'Херсон',
            'Ялта',
        ];

        foreach ($cities as $cityName) {
            Cities::firstOrCreate([
                'name' => $cityName
            ]);
        }
    }
}
