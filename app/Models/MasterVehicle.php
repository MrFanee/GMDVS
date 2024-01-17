<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterVehicle extends Model
{
    protected $table = 'vehicle_tbl';
    protected $fillable = ['id','no_pol','merk','jenis','plant','BBM','tahun','no_mesin',
                            'no_rangka','delivery_status','due_pajak','due_kir','due_nopol',
                            'status','created_by','created_date'];
    protected $primaryKey = 'id';
    public $timestamps = true;

}
