<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieControllers extends Controller
{
    //
    public function categorie(){
        $cat = DB::table('categories')->get();
        return view('categorie')->with('cat',$cat);
    }
    public function add(Request $request){
        DB::table('categories')->insert([
            'lib' => $request->lib,
            'col' => $request->col,
            
        ]);
        return back()->with('/categorie','Resident insert success'); 
    }

    public function deleteCategorie(Request $request){
        $id = $request->id;
        $appartement = Categorie::find($id);
            Categorie::destroy($id);
        
    
}
}
