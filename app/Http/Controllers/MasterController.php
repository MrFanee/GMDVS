<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterSuplier;
use App\Models\MasterVehicle;


class MasterController extends Controller
{
    public function pic()
    {
        return view('gmdvs.data_master.master_pic.index');
        // $data = DB::table('suplier_tbl')->get();

        // $data = MasterVehicle::get();
        // dd($data['0']->no_pol);



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
