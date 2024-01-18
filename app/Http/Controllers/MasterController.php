<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterSuplier;
use App\Models\MasterVehicle;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Datetime;



class MasterController extends Controller
{
    public function pic(Request $request)
    {
        return view('gmdvs.data_master.master_pic.index');
    }

    public function picDatatables(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('id','name','username' ,'role','password','group','status','date','time','handphone')
                ->where('status','=', 'ACTIVE')
                ->get();

            return Datatables::of($data)
            // ->rawColumns(['action'])
            ->editColumn('action', function($data){
                return view('gmdvs.data_master.master_pic.action._action',[
                    'model' => $data,
                ]);
            })
            ->make(true);
        }
    }

    public function kendaraan()
    {
        return view('gmdvs.data_master.master_kendaraan.index');
    }

    public function vehicleDatatables(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('vehicle_tbl')->select('id','no_pol','merk','jenis','plant','BBM','tahun','no_mesin',
            'no_rangka','delivery_status','due_pajak','due_kir','due_nopol')
                // ->where('status','=', 'ACTIVE')
                ->get();

            return Datatables::of($data)
            // ->rawColumns(['action'])
            ->editColumn('action', function($data){
                return view('gmdvs.data_master.master_kendaraan.action._action',[
                    'model' => $data,
                ]);
            })
            ->make(true);
        }
    }

    public function jadwal()
    {
        return view('gmdvs.data_master.master_jadwal.index');
    }
}
