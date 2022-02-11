<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaketBenefit;

class PaketBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paketBenefit =
        [
            [
                'paket_id' => '1',
                'nama' => 'Teknologi Terbaru',
            ],
            [
                'paket_id' => '1',
                'nama' => 'Desain Premium',
            ],
            [
                'paket_id' => '1',
                'nama' => 'Keamanan Data Website',
            ],
            [
                'paket_id' => '1',
                'nama' => 'Gratis Hosting 1 Tahun',
            ],
            [
                'paket_id' => '1',
                'nama' => 'Gratis Revisi 5 kali',
            ],
            [
                'paket_id' => '1',
                'nama' => 'Pemeliharaan Website',
            ],
            [
                'paket_id' => '2',
                'nama' => 'Teknologi Terbaru',
            ],
            [
                'paket_id' => '2',
                'nama' => ' Desain Premium',
            ],
            [
                'paket_id' => '2',
                'nama' => 'Keamanan Data Website',
            ]
        ];

        PaketBenefit::insert($paketBenefit);
    }
}
