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
    // PIC

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

    // KENDARAAN

    public function kendaraan()
    {
        return view('gmdvs.data_master.master_kendaraan.index');
    }

    public function vehicleDatatables(Request $request)
    {
        if ($request->ajax()) {
            $data = MasterVehicle::select('id','no_pol','merk','jenis','plant','BBM','tahun','no_mesin',
            'no_rangka','delivery_status','due_pajak','due_kir','due_nopol')
                ->where('status','=', 'ACTIVE')
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

    // SUPPLIER

    public function suplier()
    {
        return view('gmdvs.data_master.master_suplier.index');
    }

    public function suplierDatatables(Request $request)
    {
        if ($request->ajax()) {
            $data = MasterSuplier::select('id','status','cust_code','cust_name','id_do','do_addr1','do_addr2',
            'do_addr3','do_addr4','created_by','created_date','updated_by','updated_date')
                ->where('status','=', 'ACTIVE')
                ->get();

            return Datatables::of($data)
            // ->rawColumns(['action'])
            ->editColumn('action', function($data){
                return view('gmdvs.data_master.master_suplier.action._action',[
                    'model' => $data,
                ]);
            })
            ->make(true);
        }
    }


    // JADWAL

    public function jadwal()
    {
        return view('gmdvs.data_master.master_jadwal.index');
    }
}
