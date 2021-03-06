<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\registerInformation;

class ApiController extends Controller {
  public function getparticipant(Request $request) {
    return registerInformation::get()->count();
  }

  public function insertParticipant(Request $request) {
    $this->validate($request,[
      'first_name' => 'required|max:255',
      'last_name' => 'required|max:255',
      'phone_number' => 'required|numeric|digits_between:9,10' ,
      'email' => 'required|email'
    ]);
    $info = registerInformation::create([
      'first_name' => $request->input('first_name') ,
      'last_name' => $request->input('last_name') ,
      'phone_number' => $request->input('phone_number') ,
      'email' => $request->input('email')
    ]);
    $info->save();
    return $info->id;
  }

  public function checkRegisterCode(Request $request) {
    $this->validate($request,[
      'first_name_check' => 'required|max:255',
      'last_name_check' => 'required|max:255',
      'phone_number_check' => 'required|numeric|digits_between:9,10' ,
      'email_check' => 'required|email'
    ]);
    $info = registerInformation::where([
      ['first_name' , '=' , $request->input('first_name_check')] ,
      ['last_name' , '=' , $request->input('last_name_check')] ,
      ['phone_number' , '=' , $request->input('phone_number_check')] ,
      ['email' , '=' , $request->input('email_check')]
    ])->first();
    if($info != NULL) return $info->id;
    else return -1;
  }
}
