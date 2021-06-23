<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Auth\Events\Validated;

class RegistrationController extends Controller
{
    public function create() {
        return view('registeration.create');
    }

    public function store(Request $req)
    {
        // print_r($req->input());

        // $validated = $req->validate([
        //     'fname' => 'required|string',
        //     'lname' => 'required|string',
        //     'email' => 'required|string|email',
        //     'phone' => 'required|digits:10',
        // ]);

        $validator = Validator::make($req->all(), [
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|digits:10'
        ]);

        $message = $validator->errors();

        if ($validator->fails()) {
            return redirect('create')
			->withInput()
			->withErrors($message);
        }

        $user = new User;
        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->city = $req->city;
        $user->toRecieve = $req->torecieve;

        echo $user->save();


        // $validator = Validated::make($request->all(), $rules);
        // if ($validator->fails()) {
		// 	return redirect('create')
		// 	->withInput()
		// 	->withErrors($validator);
		// }else {
        //     $data = $request->input();
        //     try{
        //         $user = new User;
        //         $user->fname = $data['fname'];
        //         $user->lname = $data['lname'];
        //         $user->email = $data['email'];
        //         $user->phone = $data['phone'];
        //         $user->city = $data['city'];
        //         $user->toRecieve = $data['toRecieve'];

        //         $user->save();

        //         return redirect('create')->with('status', "Added Successfuly");

        //     }catch(Exception $e){
        //         return redirect('create')->with('failed', "Operation Failed");
        //     }
        // }
        // $this->validate(request(), [
        //     'fname' => 'required|string',
        //     'lname' => 'required|string',
        //     'email' => 'required|email', 
        //     'phone' => 'required'
        // ]);

        // $user = User::create(request(['fname', 'lname', 'email', 'phone', 'city', 'toRecieve']));
        // // auth()->login($user);
        // return redirect()->to('/');
    }
}
