<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        $user = User::all();
        return response()->json($user,200);
    }
    public function register(Request $request){
        $register = $request->validate( [
            'matricule' => 'required',
            'nom'=> 'required',
            'prenoms' =>'required',
            'date_naiss' => 'required',
            'lieu_naiss' => 'required',
            'sexe'=> 'required',
            'adresse'=> 'required',
            'tel' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = new Etudiant($register);
        $user->password = Hash::make($request->password);
        $user->save();

        $data = [ 'nom' => $user->email,
            'title' => 'Verification Compte'];
        Mail::to($user->email)->send(new SendEmail($data));
        $tokenResult = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'token' => $tokenResult
        ],200);
        
    }

    public function login(Request $request){
        
        $user = $request->validate([
            'email' => 'required|email',
            'password' => ['required','min:8'],

        ]);
        $user = Etudiant::where('email',$request->email)->first();
        if($user != []){
            if(Hash::check($request->password, $user->password)){
                $tokenResult = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'token' => $tokenResult
                ],200);
            }
            return response()->json(['message'=>'votre mot de passe est incorrecte'], 401);
        
        }
         return response()->json(['title'=>'Votre Adresse Email est incorrecte'], 401) ;
        
        
       
    }
    

}
