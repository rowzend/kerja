<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        return view('login.manajemen.fulluser',compact('user'));
    }

    public function create()
    {
        return view('login.manajemen.creuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'avatar' => ['sometimes','image','mimes:jpg,jpeg,png','max:2048'],
            'type' => ['required']
        ]);

        if(request()->has('avatar')){
            $avataruploaded = request()->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('/log/assets/avatars/');
            $avataruploaded->move($avatarpath,$avatarname);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->avatar = '/log/assets/avatars/' . $avatarname;
            $user->type = $request->type;
            $user->save();
            return redirect()->route('fulluser.index');
        }else
        $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->type = $request->type;
            $user->save();
            return redirect()->route('fulluser.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user,$id)
    {
        // $user->delete();
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('fulluser.index'));
    }
}
