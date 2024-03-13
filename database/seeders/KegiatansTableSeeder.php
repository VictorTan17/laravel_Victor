<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatans')->insert([
            'user_id' => 1,
            'tanggal' => '2024-03-06',
            'jam' => '09:01:00',
            'deskripsi' => 'tes',
            'updated_at' => '2024-03-06 22:29:19.955281',
            'created_at' => '2024-03-06 22:29:19.955281',
        ]);
    }
}
