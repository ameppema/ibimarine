<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users =  User::with('roles')->get();
        return view('admin.users.users', compact('users'));
    }


    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nickname' => 'nullable',
            'status' => 'required',
            'role' => 'required'
        ]);
        $user = new User;
        $data['password'] = Hash::make($data['password']);
        $user->create( array_filter($data) )->assignRole($data['role']);

        return redirect()->back();
    }


    public function update(){
        $data = request()->validate([
            'user_id' => 'required',
            'name' => 'nullable',
            'nickname' => 'nullable',
            'status' => 'nullable',
            'role' => 'nullable'
        ]);
        $user = User::findOrFail($data['user_id']);
        $user->update( array_filter($data) );

        if(isset($data['role'])){
            if(isset($user->roles[0]['name'])) $user->removeRole($user->roles[0]['name']);
            $user->assignRole($data['role']);
        }

        return redirect()->back();
    }
    public function getUserByAjax($user){
        return response()->json(User::where('id',$user)->with('roles')->first());
    }

    public function profile(){
        $user = auth()->user();
        return view('admin.profile.profile', compact('user'));
    }
    public function updateProfile(User $user){
        $data = request()->validate([
            'name' => 'nullable',
            'nickname' => 'nullable',
            'email' => 'nullable',
            'password' => 'sometimes|nullable|confirmed|min:6'
        ]);

        $user->update( array_filter($data) );
        
        return view('admin.profile.profile', compact('user'));
    }

    public function delete(){
        User::destroy(request('user_id'));
        return redirect()->back();
    }
}
