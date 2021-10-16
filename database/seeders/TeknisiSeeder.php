<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeknisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teknisi')->insert([
            'kode_teknisi' => 'T001',
            'nama_teknisi' => 'BSID',
            'user_teknisi' => 'bsid',
            'password_teknisi' => Hash::make('bsid'),
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ]);
    }
}
