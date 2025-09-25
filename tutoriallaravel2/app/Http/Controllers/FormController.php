<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function register()
    {
        return view("page.register");
    }

  public function welcome(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $full_name = $first_name . ' ' . $last_name;

        return view('page.welcome', ['full_name' => $full_name]);
    }


}
