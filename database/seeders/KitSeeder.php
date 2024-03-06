<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run()
    {
        Kit::create([
            'name' => 'Kit 1',
            'description' => 'Descripción del Kit 1'
        ]);

        Kit::create([
            'name' => 'Kit 2',
            'description' => 'Descripción del Kit 2'
        ]);

        Kit::create([
            'name' => 'Kit 3',
            'description' => 'Descripción del Kit 3'
        ]);
    }
}
