<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $register = $request->validate( [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $user = new User($register);

        $user->password = Hash::make($request->password);
      //  $user->save();
      Mail::to($user->email)->send(new SendEmail());
        return response()->json($user,200);
    }
}
