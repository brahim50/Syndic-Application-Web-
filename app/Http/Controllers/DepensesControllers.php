<?php

namespace App\Http\Controllers;

use App\Models\Depenses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepensesControllers extends Controller
{
    //
    public function depense(){
        $data = DB::table('lmmeubles')->get();
        $datappa = DB::table('categories')->get();
        $datadepense = DB::table('depenses')->get();
        return view('depenses',[
            'data' => $data,
            'datappa' => $datappa,
            'datadepense' => $datadepense,
        ]);
    }

    public function create(Request $request){
        DB::table('depenses')->insert([
            'lmmeuble' => $request->lmmeuble,
            'montant' => $request->montant,
            'date' => $request->date,
            'cat' => $request->cat,
            'des' => $request->des,
            
        ]);
        return back()->with('/depense','Depense insert success'); 
    }
    // deletedepense
    public function deletedepense($id)
    {
        $user = Depenses::where('id',$id)->first();
        $user->delete();
        return redirect('/depense')->with([
            'Success' => 'Depense supprimer'
        ]);
        
    }
    public function EditDepanse($id){
        $user = Depenses::find($id);
        $data = DB::table('lmmeubles')->get();
        $datappa = DB::table('categories')->get();
        
        return view('EditDepenses',
        [
            'data' => $data,
            'datappa' => $datappa,
            'user' => $user,


        ]);
    }

    // updateDepense

    public function updateDepense(Request $request){
        $dep =  Depenses::find($request->id);
           $dep->lmmeuble = $request->lmmeuble;
           $dep->montant = $request->montant;
           $dep->date = $request->date;
           $dep->cat = $request->cat;
           $dep->des = $request->des;
           $dep->save();
           return redirect('/depense');

    }
}
