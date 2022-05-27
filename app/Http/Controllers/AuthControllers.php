<?php

namespace App\Http\Controllers;

use App\Models\Syndic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthControllers extends Controller
{
    public function register(Request $req)
    {
        //valdiate
        $rules = [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'tele' => 'required',
            'photo' => 'required',
            'password' => 'required',
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //create new user in users table
        $user = Syndic::create([
            'nom'  => $req->nom,
            'prenom'  => $req->prenom,
            'email'  => $req->email,
            'ville'  => $req->ville,
            'tele'  => $req->tele,
            'photo'  => $req->photo,
           'password'  => Hash::make($req->password)
        ]);
        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response()->json($response, 200);
    }
    public function login(Request $req)
    {
        // validate inputs
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $req->validate($rules);
        // find user email in users table
        $syndic = Syndic::where('email', $req->email)->first();
        // if user email found and password is correct
        if ($syndic && Hash::check($req->password, $syndic->password)) {
            $token = $syndic->createToken('Personal Access Token')->plainTextToken;
            $response = ['user' => $syndic, 'token' => $token];
            return response()->json($response, 200);
        }
        $response = ['message' => 'Incorrect email or password'];
        return response()->json($response, 400);
    }

}
