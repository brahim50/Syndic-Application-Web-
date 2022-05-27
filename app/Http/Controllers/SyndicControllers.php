<?php

namespace App\Http\Controllers;

use App\Models\Lmmeuble;
use App\Models\Syndic;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SyndicControllers extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    public function save(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'tele' => 'required',
            'photo' => 'required',
            'password' => 'required',
        ]);

        $syndic = new Syndic();
        $syndic->nom  = $request->nom;
        $syndic->prenom  = $request->prenom;
        $syndic->email  = $request->email;
        $syndic->ville  = $request->ville;
        $syndic->tele  = $request->tele;
        $syndic->photo  = $request->photo;
        $syndic->password  =Hash::make($request->password);
        $save = $syndic->save();

        if($save){
            return back()->with('success','Create Account successfully');
        }
        else{
            return back()->with('fail','Sommething wrong try again');
        }
        
        
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $userInfo = Syndic::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','Email Incorect');
        }else{

            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('loggedSyndic',$userInfo->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password Incorect');
            }
        }

    }

    public function dashboard(){
        $users = DB::table('lmmeubles')->count();
        $appar = DB::table('appartements')->count();
        $revu = DB::table('revenus')->count();
        $cat = DB::table('categories')->count();
        $dep = DB::table('depenses')->count();
        $res = DB::table('residents')->count();
        return view('dashboard',[
            'users' => $users,
            'appar' => $appar,
            'revu' => $revu,
            'cat' => $cat,
            'dep' => $dep,
            'res' => $res,


        ]);
    }

}
