<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan()
    {
    	$data_jurusan = \App\jurusan::all();
    	return view('jurusan.jurusan', ['data_jurusan' => $data_jurusan]);
    }

    public function edit($id)
    {
    	$jurusan = \App\jurusan::find($id);
    	return view ('jurusan/jurusan');

    }
}
