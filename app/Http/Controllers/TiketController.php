<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function open()
    {
        return view('dashboard.open');
    }

    public function pending()
    {
        return view('dashboard.pending');
    }

    public function close()
    {
        return view('dashboard.close');
    }

    public function close_detail()
    {
        return view('dashboard.close-detail');
    }
}
