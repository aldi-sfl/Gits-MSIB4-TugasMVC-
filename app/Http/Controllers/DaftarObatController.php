<?php

namespace App\Http\Controllers;

use App\Models\daftar_obat;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Storedaftar_obatRequest;
use App\Http\Requests\Updatedaftar_obatRequest;
use App\Http\Controllers\Controller;



class DaftarObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarObats = DB::table('daftar_obats')->get();
        return view('obat', compact('daftarObats'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedaftar_obatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedaftar_obatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\daftar_obat  $daftar_obat
     * @return \Illuminate\Http\Response
     */
    public function show(daftar_obat $daftar_obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\daftar_obat  $daftar_obat
     * @return \Illuminate\Http\Response
     */
    public function edit(daftar_obat $daftar_obat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedaftar_obatRequest  $request
     * @param  \App\Models\daftar_obat  $daftar_obat
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedaftar_obatRequest $request, daftar_obat $daftar_obat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\daftar_obat  $daftar_obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(daftar_obat $daftar_obat)
    {
        //
    }
}
