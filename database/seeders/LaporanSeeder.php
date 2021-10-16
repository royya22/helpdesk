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
            'kode_permohonan' => 'BSID000001',
            'nama_pemohon' => 'Royya',
            'no_tlp' => '1234',
            'unit' => 'BSID',
            'ruangan' => 'BSID',
            'subjek' => 'Internet',
            'deskripsi' => 'Internet Bermasalah',
            'status' => 'Open',
            'keterangan_pending' => '',
            'keterangan_close' => '',
            'teknisi' => '',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'BSID000002',
            'nama_pemohon' => 'Ahmad',
            'no_tlp' => '4567',
            'unit' => 'Protokol',
            'ruangan' => 'Protokol',
            'subjek' => 'Printer',
            'deskripsi' => 'Sharing Printer',
            'status' => 'Pending',
            'keterangan_pending' => 'Nunggu Alat',
            'keterangan_close' => '',
            'teknisi' => 'Firly',
            'created_at' => new DateTime('now'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'BSID000003',
            'nama_pemohon' => 'Gunadi',
            'no_tlp' => '7890',
            'unit' => 'Arsip',
            'ruangan' => 'Arsip',
            'subjek' => 'Internet',
            'deskripsi' => 'Kabel Internet Putus',
            'status' => 'Close',
            'keterangan_pending' => '',
            'keterangan_close' => 'Krimping Ulang',
            'teknisi' => 'Royya',
            'created_at' => new DateTime('yesterday'),
            'updated_at' => new DateTime('now')
        ],[
            'kode_permohonan' => 'BSID000004',
            'nama_pemohon' => 'Noor',
            'no_tlp' => '2345',
            'unit' => 'BMN',
            'ruangan' => 'BMN',
            'subjek' => 'Internet',
            'deskripsi' => 'Minta Kabel LAN',
            'status' => 'Close',
            'keterangan_pending' => 'Nunggu Kabel ',
            'keterangan_close' => 'Sudah dibuatkan',
            'teknisi' => 'Rizal',
            'created_at' => new DateTime('yesterday'),
            'updated_at' => new DateTime('now')
        ]]);
    }
}
