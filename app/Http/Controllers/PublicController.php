<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicController extends Controller
{
  public function index ()
  {
      return  view('index');
  }


  public function InputInfo(Request $request)
  {
        info::create([
            'Name'=>$request -> input('name'),
            'Card_No'=> $request -> input('card_No'),
            'Contact_No'=> $request -> input('contact_No'),
            'Email'=> $request -> input('email')
        ]);

        return redirect()->route('index');
  }


  public function register()
  {
      return  view('register');
  }
}
