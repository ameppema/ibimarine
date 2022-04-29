<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users =  User::with('roles')->get();
        return view('admin.users.users', compact('users'));
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
}
