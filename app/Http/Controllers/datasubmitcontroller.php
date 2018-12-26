<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datasubmit;
use Hash;

class datasubmitcontroller extends Controller
{
    public function create(Request $request){
    	// dd($request->all());
    	$name = $request->name;
    	$email = $request->email;
    	$address = $request->address;
    	$mobile = $request->mobile;
    	$password = $request->password;
    	$confirm_password = $request->confirm_password;

    	$data = new datasubmit();
    	$data->name = $name;
    	$data->email = $email;
    	$data->address = $address;
    	$data->mobile = $mobile;
    	$data->sspassword = Hash::make($password);
    	$data->confirm_password = Hash::make($confirm_password);
    	 $data->save();
    	 return redirect('/view_table');
    }

    public function index() {
    	$data = datasubmit::all();
    	// dd($data);
    	return view('index', compact('data')); 

    }
    public function destroy($id) {
    	$data = datasubmit::find($id);
  		$data->delete();
  		return redirect('/view_table');

    }
    public function edit($id) {
    	$data = datasubmit::find($id);
    	// dd($data);
    	return view('/update', compact('data'));
    }
    public function update(Request $request , $id) {	
    	$name = $request->name;
    	$email = $request->email;
    	$address = $request->address;
    	$mobile = $request->mobile;
    	$password = $request->password;
    	$confirm_password = $request->confirm_password;

    	$data = datasubmit::find($id);
    	$data->name = $name;
    	$data->email = $email;
    	$data->address = $address;
    	$data->mobile = $mobile;
    	$data->sspassword = Hash::make($password);
    	$data->confirm_password = Hash::make($confirm_password);
    	 $data->save();

    	 return redirect('/view_table');



    }
}
