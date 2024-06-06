<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function user(Request $request){
        $data['getRecord'] = User::get();
        return view('admin.user.list', $data);
    }

    public function add_user(Request $request){
        return view('admin.user.add');
    }

    public function insert_add_user(Request $request){
        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = Hash::make($request->password);
        $save->is_role = $request->is_role;
               
        $save->save();

        return redirect('admin/user')->with('success', 'User successfully created');
        
    }
}
