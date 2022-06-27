<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $driver = null;
        //get logged in user
        $user = User::find(Auth::user()->id);
        if($user->isadmin == 1){
            $driver = User::all();
        } else{
            $driver = User::find(Auth::user()->id);
        }
        return view('home', compact('driver'));

    }
    public function adminhome(){
        $driver = User::all();
        return view('adminhome', compact('driver'));
    }
    public function edit($id){
        $data =User::find($id);
        return view('editdrivers', compact('data'));
    }
    public function delete($id){
        $data =User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $data=User::find($id);
        $data->name =$request->name;
		$data->gender =$request->gender;
        $data->dateofbirth =$request->dateofbirth;
		$data->phone =$request->phone;
        $data->email =$request->email;
		$data->address =$request->address;
        $data->nextofkin =$request->nextofkin;
		$data->nextofkinphone =$request->nextofkinphone;
        $data->update();
        return redirect()->route('admin')->with('status', 'Updated Successfully');
    }
    public function updateDriver(Request $request, $id){
        $data=User::find($id);
        $data->name =$request->name;
		$data->gender =$request->gender;
        $data->dateofbirth =$request->dateofbirth;
		$data->phone =$request->phone;
        $data->email =$request->email;
		$data->address =$request->address;
        $data->nextofkin =$request->nextofkin;
		$data->nextofkinphone =$request->nextofkinphone;
        $data->update();
        return redirect('home')->with('status', 'Updated Successfully');
    }
}
