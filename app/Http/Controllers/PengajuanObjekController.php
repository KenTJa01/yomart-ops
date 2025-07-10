<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PengajuanObjekController extends Controller
{

    public function PengajuanObjekPage()
    {

        return view('kelola_lokasi.pengajuan_objek');

    }

}
