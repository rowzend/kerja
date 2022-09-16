<?php

namespace App\Http\Controllers;

use App\Models\izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izin = Izin::all();
        return view('login.users.izin.izin', compact('izin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.users.izin.upizin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:150'],
            'nip' => ['required', 'string','digits:18'],
            'pangkat' => ['required', 'string', 'max:100'],
            'jabas' => ['required', 'string', 'max:100'],
            'unora' => ['required', 'string', 'max:150'],
            'instansia' => ['required', 'string', 'max:150'],
            'nohp' => ['required', 'string','min:10','max:14'],
            'instansib' => ['required', 'string', 'max:150'],
            'unorb' => ['sometimes', 'string', 'max:150'],
            'jabtu' => ['sometimes', 'string', 'max:150'],
            'permohonan' => ['required','file','mimes:pdf','max:1024'],
            'sizin' => ['required','file','mimes:pdf','max:1024'],
            'skp' => ['required','file','mimes:pdf','max:5120'],
            'sk' => ['required','file','mimes:pdf','max:1024']
        ]);

        $request['user_id'] = auth()->user()->id;


        // $izin = new Izin;
        // $izin->user_id = auth()->user()->id;
        // $izin->nama = $request->nama;
        // $izin->nip = $request->nip;
        // $izin->pangkat = $request->pangkat;
        // $izin->jabas = $request->jabas;
        // $izin->unora = $request->unora;
        // $izin->instansia = $request->instansia;
        // $izin->nohp = $request->nohp;
        // $izin->inztansib = $request->instansib;
        // $izin->unorb = $request->unorb;
        // $izin->jabtu = $request->jabtu;
        // $izin->permohonan = $request->permohonan;
        // $izin->sizin = $request->sizin;
        // $izin->skp = $request->skp;
        // $izin->sk = $request->sk;
        // $izin->save();
        Izin::create($request);
        return redirect()->route('izin.izin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function show(izin $izin)
    {
        return view('login.users.izin.berizin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function edit(izin $izin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, izin $izin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function destroy(izin $izin)
    {
        //
    }
}
