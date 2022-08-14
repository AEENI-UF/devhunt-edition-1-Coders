<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TwilioController;
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
    public function index()
    {
        $user = User::all();
        return response()->json($user, 200);
    }
    public function register(Request $request)
    {
        $register = $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenoms' => 'required',
            'date_naiss' => 'required',
            'lieu_naiss' => 'required',
            'sexe' => 'required',
            'adresse' => 'required',
            'tel' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required'
        ]);

        $user = new Etudiant($register);
        $user->password = Hash::make($request->password);
        $user->save();

        $data = [
            'nom' => $user->email,
            'title' => 'Verification Compte'
        ];
        Mail::to($user->email)->send(new SendEmail($data));
        $tokenResult = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'token' => $tokenResult
        ], 200);
    }

    public function login(Request $request)
    {

        $user = $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'min:8'],

        ]);
        $user = Etudiant::where('email', $request->email)->first();
        if ($user != []) {
            if (Hash::check($request->password, $user->password)) {
                $tokenResult = $user->createToken('auth_token')->plainTextToken;

                TwilioController::sendMessage($this->generateRandomString(8));
                return response()->json([
                    'token' => $tokenResult
                ], 200);
            }
            return response()->json(['message' => 'votre mot de passe est incorrecte'], 401);
        }
        return response()->json(['title' => 'Votre Adresse Email est incorrecte'], 401);
    }

    protected function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function registerUser(Request $request)
    {
        $validatedUser = $request->validate([
            'nom' => ['bail', 'required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = User::create([
            'nom' => $validatedUser['nom'],
            'prenoms' => $validatedUser['prenoms'],
            'phone' => $validatedUser['phone'],
            'email' => $validatedUser['email'],
            'password' => Hash::make($validatedUser['password']),
        ]);
        return response()->json($user);
    }
}
