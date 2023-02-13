<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kurir;

class KurirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kurir::factory()->count(3)->sequence(
        [
            'Kurir' => 'JNE',
        ],
        [
            'Kurir' => 'SiCepat',
        ],
        [
            'Kurir' => 'J&T Express',
        ])->create();
    }
}
