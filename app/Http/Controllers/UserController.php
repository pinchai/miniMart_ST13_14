<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function createUser(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $phone = $request->phone;
        $password = $request->password;
        $role = $request->role;

        $user = new User();
        $user->name = $name;
        $user->email = time().'test@mail.com';
        $user->password = Hash::make($password);
        $user->save();

        return redirect(route('user'));
    }

    public function createUserByAPI(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $phone = $request->phone;
        $password = '123456789';
        $role = $request->role;

        $user = new User();
        $user->name = $name;
        $user->email = time().'test@mail.com';
        $user->password = Hash::make($password);
        $user->save();

        $data = \App\Models\User::all();
        return response()->json($data);
    }

    public function deleteUser(Request $request){
        $user = User::find($request->id);
        if($user){
            $user->delete();
            return redirect(route('user'));
        }
    }

    public function indexUpdateUser(Request $request){
        $id = $request->query('id');
        $user = User::find($id);
        return view('user.edit', ['user'=>$user]);
    }

    public function updateUser(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        return redirect(route('user'));
    }
}
