<?php

namespace App\Http\Controllers;

use App\Models\izin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izin = Izin::whereUserId(Auth::id())->get();
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
            'nama' => 'required|max:99',
            'nip' => 'required|digits:18',
            'pangkat' => 'required|max:25',
            'jabas' => 'required|max:69',
            'unora' => 'required|max:50',
            'instansia' => 'required|max:50',
            'nohp' => 'required|min:11|max:13',
            'instansib' => 'required|max:50',
            'unorb' => 'sometimes|max:50',
            'jabtu' => 'sometimes|max:69',
            'file1' => 'required|file|mimes:pdf|max:5220',
            'file2' => 'required|file|mimes:pdf|max:2048'
        ]);

        $path =$request->file('file1')->store('public/file');
        $path =$request->file('file2')->store('public/file');
        $request->user()->izin()->create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabas' => $request->jabas,
            'unora' => $request->unora,
            'instansia' => $request->instansia,
            'nohp' => $request->nohp,
            'instansib' => $request->instansib,
            'unorb' => $request->unorb,
            'jabtu' => $request->jabtu,
            'file1' => $path,
            'file2' => $path
        ]);
        // $izin->save();
        // Izin::create($request);
        return redirect()->route('izin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function show(izin $izin)
    {
        return view('login.users.izin.berizin', compact('izin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\izin  $izin
     * @return \Illuminate\Http\Response
     */
    public function edit(izin $izin)
    {
        return view('login.users.izin.eizin', compact('izin'));
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
        $request->validate([
            'nama' => 'required|max:99',
            'nip' => 'required|digits:18',
            'pangkat' => 'required|max:25',
            'jabas' => 'required|max:69',
            'unora' => 'required|max:50',
            'instansia' => 'required|max:50',
            'nohp' => 'required|min:11|max:13',
            'instansib' => 'required|max:50',
            'unorb' => 'sometimes|max:50',
            'jabtu' => 'sometimes|max:69',
        ]);

        $izin = Izin::find($izin);
        if($request->hasFile('file1')){
            $request->validate([
                'file1' => 'required|file|mimes:pdf|max:5220',
            ]);
            $path = $request->file('file1')->store('public/file');
            $izin->file = $path;
        }
        if($request->hasFile('file2')){
            $request->validate([
                'file2' => 'required|file|mimes:pdf|max:2048',
            ]);
            $path = $request->file('file2')->store('public/file');
            $izin->file = $path;
        }
        
        $$izin->user()->izin()->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabas' => $request->jabas,
            'unora' => $request->unora,
            'instansia' => $request->instansia,
            'nohp' => $request->nohp,
            'instansib' => $request->instansib,
            'unorb' => $request->unorb,
            'jabtu' => $request->jabtu,
            'file1' => $path,
            'file2' => $path
        ]);
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
