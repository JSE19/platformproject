<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    public function index(){
        return User::all();
    }
    public function store(){
        return User::create([
            'name' =>request('name'),
            'gender'  => request('gender'),
            'dateofbirth' => request('dateofbirth'),
            'phone' => request('phone'),
            'address' => request('address'),
            'nextofkin' => request('nextofkin'),
            'nextofkinphone' => request('nextofkinphone'),
            'email' => request('email'),
            'password' => request('password'),
            ]);
    }
    public function update(User $user){
        $success = $user->update([
            'name' =>request('name'),
            'gender'  => request('gender'),
            'dateofbirth' => request('dateofbirth'),
            'phone' => request('phone'),
            'address' => request('address'),
            'nextofkin' => request('nextofkin'),
            'nextofkinphone' => request('nextofkinphone'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        return [
            'success'=> $success
        ];
    }

    public function destroy(User $user){
        $success = $user->delete();
        return [
            'success'=>$success,
        ];
    }
}
