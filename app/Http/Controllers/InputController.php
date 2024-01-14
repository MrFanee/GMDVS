<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function keberangkatan()
    {
        return view('gmdvs.data_input.index_keberangkatan');
    }

    public function kedatangan()
    {
        return view('gmdvs.data_input.index_kedatangan');
    }
}
