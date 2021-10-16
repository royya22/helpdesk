<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function open()
    {
        $data = Laporan::where('status','like','Open')->orderBy('id_laporan','ASC')->get();
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
           );
        return view('dashboard.open')->with('data',$data)->with('daftar_hari',$daftar_hari);
    }

    public function pending()
    {
        $data = Laporan::where('status','like','Pending')->orderBy('id_laporan','ASC')->get();
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
           );
        return view('dashboard.pending')->with('data',$data)->with('daftar_hari',$daftar_hari);
    }

    public function close()
    {
        $data = Laporan::where('status','like','Close')->orderBy('id_laporan','ASC')->get();
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
           );
        return view('dashboard.close')->with('data',$data)->with('daftar_hari',$daftar_hari);
    }

    public function close_detail($id)
    {
        $data = Laporan::find($id);
        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
           );
        return view('dashboard.close-detail')->with('data',$data)->with('daftar_hari',$daftar_hari);
    }
}
