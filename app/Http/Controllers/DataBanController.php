<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBanController extends Controller
{

    public function listDataBanPage()
    {

        return view('kelola_lokasi.list_data_ban');

    }

    public function formDataBanPage()
    {

        return view('kelola_lokasi.form_data_ban');

    }

}
