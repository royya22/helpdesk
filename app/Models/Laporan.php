<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $fillable = ['kode_permohonan','nama_pemohon','no_tlp','unit','ruangan','subjek','deskripsi','status','keterangan_pending','keterangan_close'];
}
