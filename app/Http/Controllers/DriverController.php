<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;

class DriverController extends Controller
{
    public function index()
    {
    	return view("welcomedriver");
    }
	public function register()
	{
		return view('adddriver');
	}
	
	public function store(Request $request){
		$data = new driver();
		$data->fullname =$request->fullname;
		$data->gender =$request->gender;
        $data->dateofbirth =$request->dateofbirth;
		$data->phone =$request->phone;
        $data->email =$request->email;
		$data->address =$request->address;
        $data->nextofkin =$request->nextofkin;
		$data->nextofkinphone =$request->nextofkinphone;
        $data->password =$request->password;
		$data->save();
		return redirect()->back();
	}
}