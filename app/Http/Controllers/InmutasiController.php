<?php

namespace App\Http\Controllers;

use App\Models\inmutasi;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class InmutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmutasi = Inmutasi::all();
        return view('login.info.inmutasi', compact('inmutasi'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.info.addinmutasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'isi' => 'required|min:10'
        ]);

        Inmutasi::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect()->route('inmutasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inmutasi  $inmutasi
     * @return \Illuminate\Http\Response
     */
    public function show(inmutasi $inmutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inmutasi  $inmutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(inmutasi $inmutasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inmutasi  $inmutasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inmutasi $inmutasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inmutasi  $inmutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(inmutasi $inmutasi)
    {
        //
    }
}
