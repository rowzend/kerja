<?php

namespace App\Http\Controllers;

use App\Models\usermanagement;
use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alluser()
    {
        $user_table = User::all();
        return view('login.manajemen.alluser',compact('user_table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.manajemen.adduser');
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
     * @param  \App\Models\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function show(usermanagement $usermanagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function edit(usermanagement $usermanagement)
    {
        return view('login.manajemen.edituser');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usermanagement $usermanagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(usermanagement $usermanagement)
    {
        //
    }
}
