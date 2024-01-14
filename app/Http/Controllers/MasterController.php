<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function pic()
    {
        return view('gmdvs.data_master.master_pic.index');
    }

    public function kendaraan()
    {
        return view('gmdvs.data_master.master_kendaraan.index');
    }

    public function jadwal()
    {
        return view('gmdvs.data_master.master_jadwal.index');
    }
}
