<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\Paket;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket = [
            [
                'judul' => 'Paket Maksimal',
                'slug' => 'paket-maksimal',
                'harga' => 2800000,
                'created_at' =>date('Y-m-d H:i:s', time()),
                'updated_at' =>date('Y-m-d H:i:s', time()),
            ],
            [
                'judul' => 'Paket Standar',
                'slug' => 'paket-standar',
                'harga' => 1300000,
                'created_at' =>date('Y-m-d H:i:s', time()),
                'updated_at' =>date('Y-m-d H:i:s', time()),
            ],
        ];

        // 1st Method
        // foreach ($paket as $key => $pkt) {
        //     Paket::create($pkt);
        // }

        //2nd Method
        Paket::insert($paket);
    }
}
