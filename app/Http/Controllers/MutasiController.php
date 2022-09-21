<?php

namespace App\Http\Controllers;

use App\Models\mutasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berkas = Mutasi::whereUserId(Auth::id())->get();
        return view('login.users.mutasi.hmutasi', compact('berkas'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(mutasi $mutasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(mutasi $mutasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mutasi $mutasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(mutasi $mutasi)
    {
        //
    }
}
