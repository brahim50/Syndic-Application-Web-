<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class ResidentControllers extends Controller
{
    //
    public function resident(){
        $datappa = DB::table('appartements')->get();
        $data = DB::table('lmmeubles')->get();
        $dataresi = DB::table('residents')->get();
        return view('Resident',[
            'data' => $data,
            'datappa' => $datappa,
            'dataresi' => $dataresi,
        ]);
    }
    public function EditResident($id){
        $user = Resident::find($id);
        $datappa = DB::table('appartements')->get();
        $data = DB::table('lmmeubles')->get();
        return view('EditResident',
        [
            'data' => $data,
            'datappa' => $datappa,
            'user' => $user,


        ]);
    }
    public function createResident(Request $request){
        $newImageName = time() . '-' . $request->photo->extension();

         $request->photo->move(public_path('photo'),$newImageName);
        



        DB::table('residents')->insert([
            'lmmeuble' => $request->lmmeuble,
            'appartement' => $request->appartement,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ville' => $request->ville,
            'email' => $request->email,
            'tele' => $request->tele,
            'photo' => $newImageName,
        ]);
        return back()->with('/resident','Resident insert success'); 
    }
    public function updateresident(Request $request){
        $newImageName = time() . '-' . $request->photo->extension();
		$emp = Resident::find($request->id);
		$request->photo->move(public_path('photo'),$newImageName);

		$empData = [
            'lmmeuble' => $request->lmmeuble,
            'appartement' => $request->appartement,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ville' => $request->ville,
            'email' => $request->email,
            'tele' => $request->tele,
            'photo' => $newImageName,
                ];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
    }

    //deleteresident
    public function deleteresident($id)
    {
        $user = Resident::where('id',$id)->first();
        $user->delete();
        return redirect('/resident')->with([
            'Success' => 'User supprimer'
        ]);
        
    }
    
    public function Email($id){
        $user = Resident::find($id);
       
        return view('Email',
        [
            'user' => $user,


        ]);
    }
    public function send(Request $request){
        //validation

        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'sub' => 'required',
            'text' => 'required',

        ]);
        if($this->isOnline()){
           $email_data = [
               'recipient' => 'brahimy-99@hotmail.com',
               'nom' => $request->nom,
               'email' => $request->email,
               'sub' => $request->sub,
               'text' => $request->text,
           ];
           Mail::to('brahimboukar50@gmail.com')->send(new TestMail($email_data));
               
           
           return redirect()->back()->with('success','Eamil Sent!');


        }
        else{
            return redirect()->back()->withInput()->with('error','check your Internet Connection');
        }



    }

    public function isOnline($site = "http://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }
        else{
            return false;
        }
    }


}
//$request->photo->move(public_path('photo'),$newImageName)