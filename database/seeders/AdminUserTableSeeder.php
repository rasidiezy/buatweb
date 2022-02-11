<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin',
            'email' => 'admin@buatweb.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('12345'),
            'is_admin' => true
        ]);
    }
}
