<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            ['name' => 'NexusTech', 'slug' => 'nexustech'],
            ['name' => 'Auraudio', 'slug' => 'auraudio'],
            ['name' => 'Vanguard', 'slug' => 'vanguard'],
            ['name' => 'HomeGoods', 'slug' => 'homegoods'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
