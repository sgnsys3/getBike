<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\registerInformation;

class ApiController extends Controller {
  public function getparticipant(Request $request) {
    return registerInformation::get()->count();
  }
}
