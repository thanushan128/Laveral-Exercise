<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        // perform validation

        // $user = new User;

        // $user->name = $request->get('name');
        // $user->name = $request->get('age');
        // $user->name = $request->get('phone');
        // $user->name = bcrypt($request->get('password'));
        // $user->name = $request->get('address');
        // $user->name = $request->get('city');
        // $user->name = $request->get('state');
        // $user->name = $request->get('email');
        $user = User::create($request->all());

        $user->save();

        if($user->is_admin==1){
            return "User create sucessfully and He is admin";
        }else{
            return "User create sucessfully";
        }
    }
}
