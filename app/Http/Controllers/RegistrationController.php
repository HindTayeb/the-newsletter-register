<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
{
    protected $MailController;

    public function create() {
        return view('index', ['cities' => City::all()]);
    }

    public function store(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
            'email' => 'required|email',
            'phone' => array(
                'required',
                'digits:10',
                'regex:/^(05)(0|1|3|4|5|6|7|8|9)([0-9]{7})$/i'
                )

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

        $data = array(
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email' => $user->email,
            'phone' => $user->phone,
            'city' => $user->city_id
        );

        if($user->toRecieve == 1){

            Mail::send('mail', ['data' => $data], function($message) use ($data) {
                $message->to($data['email'], $data['fname'])->subject
                   ('Subscription to The Newsletter');
                $message->from('xyz@gmail.com','The Newsletter');
             });

            return redirect('/register')->with('status', "Added Successfuly! An Email Sent. Check your inbox.");
            
        }else {
            return redirect('/register')->with('status', "Added Successfuly!");
        }
        
    }
}
