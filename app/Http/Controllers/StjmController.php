<?php

namespace App\Http\Controllers;

use App\Models\stjm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StjmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stjm = Stjm::whereUserId(Auth::id())->get();
        return view('login.users.setuju.setuju', compact('stjm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.users.setuju.setujuce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            // 'user_id' => 'required',
            'nama' => 'required|max:99',
            'nip' => 'required|digits:18',
            'pangkat' => 'required|max:25',
            'jabas' => 'required|max:69',
            'unora' => 'required|max:50',
            'instansia' => 'required|max:50',
            'nohp' => 'required|min:11|max:13',
            'instansib' => 'required|max:50',
            'unorb' => 'sometimes|max:50',
            'jabtu' => 'sometimes|max:69'
        ]);

        $request->user()->setuju()->create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabas' => $request->jabas,
            'unora' => $request->unora,
            'instansia' => $request->instansia,
            'nohp' => $request->nohp,
            'instansib' => $request->instansib,
            'unorb' => $request->unorb,
            'jabtu' => $request->jabtu
        ]);

        // $data['user_id'] = auth()->user()->id;

        // Stjm::create( $data
        //     [
        //         'nama' => $request->nama,
        //         'nip' => $request->nip,
        //         'pangkat' => $request->pangkat,
        //         'jabas' => $request->jabas,
        //         'unora' => $request->unora,
        //         'instansia' => $request->instansia,
        //         'nohp' => $request->nohp
        //     ]
        // );
        return redirect()->route('persetujuan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stjm  $stjm
     * @return \Illuminate\Http\Response
     */
    public function show(stjm $stjm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stjm  $stjm
     * @return \Illuminate\Http\Response
     */
    public function edit(stjm $stjm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stjm  $stjm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stjm $stjm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stjm  $stjm
     * @return \Illuminate\Http\Response
     */
    public function destroy(stjm $stjm)
    {
        //
    }
}
