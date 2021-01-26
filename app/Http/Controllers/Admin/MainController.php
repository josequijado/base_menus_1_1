<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __construct()
    {
        //
    }

    public function BM_index()
    {
        return view('BM.admin.index');
    }
}
