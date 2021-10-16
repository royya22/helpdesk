<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjek')->insert([[
            'kode_subjek' => 'INT',
            'subjek' => 'KONEKSI INTERNET',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_subjek' => 'NEW',
            'subjek' => 'INSTALASI BARU',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_subjek' => 'APK',
            'subjek' => 'APLIKASI',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ]]);
    }
}
