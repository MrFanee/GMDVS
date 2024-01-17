<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSuplier extends Model
{
    protected $table = 'suplier_tbl';
    protected $fillable = ['id','status','cust_code','cust_name','id_do','do_addr1','do_addr2',
                            'do_addr3','do_addr4','created_by','created_date','updated_by','updated_date'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
