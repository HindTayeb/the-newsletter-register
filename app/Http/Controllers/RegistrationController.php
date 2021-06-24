<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function create() {
        return view('index', ['cities' => City::all()]);
    }

    public function store(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|string|email',
            'phone' => 'required|digits:10'
        ]);

        $message = $validator->errors();

        if ($validator->fails()) {
            return redirect('/register')
			->withInput()
			->withErrors($message);
        }

        $user = new User;
        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->city_id = $req->city;
        $user->toRecieve = $req->torecieve;

        $user->save();

        return redirect('/register')->with('status', "Added Successfuly!");
    }
}
