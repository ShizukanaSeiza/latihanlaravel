<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $data = ruangan::all();
        return view('ruangan.index',compact('data'));
    }
    public function store(Request $request)
    {
        ruangan::create(
            $request->only('nama','kapasitas'));
            return redirect()->back();
    }
}
