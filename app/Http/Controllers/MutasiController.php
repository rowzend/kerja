<?php

namespace App\Http\Controllers;

use App\Models\mutasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        return view('login.users.mutasi.cmutasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:99',
            'nip' => 'required|digits:18',
            'pangkat' => 'required|max:25',
            'eska' => 'required|file|mimes:pdf|max:2048'
        ]);

        $path =$request->file('eska')->store('public/file');
        $request->user()->berkas()->create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'eska' => $path
        ]);
        return redirect()->route('berkas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function show(mutasi $mutasi, $item)
    {
        $mutasi = Mutasi::findOrFail($item);
        return view('login.users.mutasi.smutasi', compact('mutasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function edit(mutasi $mutasi, $items)
    {
        $mutasi = Mutasi::findOrFail($items);
        return view('login.users.mutasi.edmutasi', compact('mutasi'));
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
        $request->validate([
            'nama' => 'required|max:99',
            'nip' => 'required|digits:18',
            'pangkat' => 'required|max:25',
        ]);

        $mutasi = Mutasi::find($mutasi);
        if($request->hasFile('eska')){
            $request->validate([
                'eska' => 'required|file|mimes:pdf|max:2048'
            ]);
            $path =$request->file('eska')->store('public/file');
            $request->user()->berkas()->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'eska' => $path
            ]);
        }

        return redirect()->route('berkas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mutasi  $mutasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(mutasi $mutasi, $id)
    {
        $mutasi = Mutasi::findOrFail($id);
        $mutasi->delete();
        return redirect()->route('berkas.index');
    }
}
