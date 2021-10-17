<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporan')->insert([[
            'kode_permohonan' => 'APK00121001',
            'nama_pemohon' => 'Royya',
            'no_tlp' => '1234',
            'unit' => '001',
            'ruangan' => 'BSID',
            'subjek' => 'APK',
            'deskripsi' => 'Internet Bermasalah',
            'status' => '1',
            'keterangan_pending' => '',
            'keterangan_close' => '',
            'teknisi' => '',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'NEW00221001',
            'nama_pemohon' => 'Ahmad',
            'no_tlp' => '4567',
            'unit' => '002',
            'ruangan' => 'Protokol',
            'subjek' => 'NEW',
            'deskripsi' => 'Sharing Printer',
            'status' => '2',
            'keterangan_pending' => 'Nunggu Alat',
            'keterangan_close' => '',
            'teknisi' => 'Firly',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'INT00321001',
            'nama_pemohon' => 'Gunadi',
            'no_tlp' => '7890',
            'unit' => '003',
            'ruangan' => 'Arsip',
            'subjek' => 'INT',
            'deskripsi' => 'Kabel Internet Putus',
            'status' => '3',
            'keterangan_pending' => '',
            'keterangan_close' => 'Krimping Ulang',
            'teknisi' => 'Royya',
            'created_at' => new DateTime('yesterday'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'INT00121001',
            'nama_pemohon' => 'Noor',
            'no_tlp' => '2345',
            'unit' => '001',
            'ruangan' => 'BMN',
            'subjek' => 'INT',
            'deskripsi' => 'Minta Kabel LAN',
            'status' => '3',
            'keterangan_pending' => 'Nunggu Kabel ',
            'keterangan_close' => 'Sudah dibuatkan',
            'teknisi' => 'Rizal',
            'created_at' => new DateTime('yesterday'),
            'updated_at' => new DateTime('now')
        ]]);
    }
}
