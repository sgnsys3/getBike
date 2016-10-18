<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\registerInformation;

class RegisterController extends Controller {
  public function register(Request $request) {
    $this->validate($request,[
      'first_name' => 'required|max:255',
      'last_name' => 'required|max:255',
      'phone_number' => 'required|alpha_num|min:9|max:10' ,
      'email' => 'required|email'
    ]);
    $info = registerInformation::create([
      'first_name' => $request->input('first_name') ,
      'last_name' => $request->input('last_name') ,
      'phone_number' => $request->input('phone_number') ,
      'email' => $request->input('email')
    ]);
    $info->save();
    return view('index' , ['successful' => '1' , 'regisCode' => $info->id]);
  }
}
