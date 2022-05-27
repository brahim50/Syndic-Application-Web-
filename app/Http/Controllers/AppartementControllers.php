<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppartementControllers extends Controller
{
    public function appartement(){
        $data = DB::table('lmmeubles')->get();
        return view('appartement')->with('data',$data);
    }

    //fetchAllappartement
    public function fetchAllappartement(){
        $appartement = Appartement::all();
        $output = '';
        if($appartement ->count() > 0){
            $output .= '<table id="zero_config" class="table table-striped table-bordered">
            <thead>
            <tr>
            <th>Lmmeuble</th>
            <th>Numero</th>
            <th>Surface</th>
            <th>Etage</th>
            <th>Action</th>
        </tr>
            </thead>
            <tbody>';
            foreach ($appartement as $appar){
                $output .= '<tr>
                <td>' . $appar->lmmeuble  . '</td>
                <td>' . $appar->numero  . '</td>
                <td>' . $appar->surface . '</td>
                <td>' . $appar->etage . '</td>
                <td>
                  <a href="#" id="' . $appar->id . '" <button type="button" class="btn btn-outline-danger deleteIcon" style="position: relative;left:40px;"><i class="mdi mdi-delete"></i></button>

                  <a href="#" id="' . $appar->id . '" <button type="button" class="btn btn-outline-warning editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal" style="position: relative;left:70px;"><i class="mdi mdi-pencil"></i></button>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
			echo $output;

        } else {

            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }
    public function createAppartement(Request $request)
    {
       
        $empData = [
            'lmmeuble' => $request->lmmeuble, 
            'numero' => $request->numero, 
            'etage' => $request->etage, 
            'surface' => $request->surface,
        ];
        Appartement::create($empData);
        return response()->json([
			'status' => 200,
		]);
    }
    // edit
    public function editAppartement(Request $request) {
		$id = $request->id;
		$appar = Appartement::find($id);
		return response()->json($appar);
	}
    // update appartement
    
    public function updateappartement(Request $request) {
		$emp = Appartement::find($request->id);
		$empData = [
            'lmmeuble' => $request->lmmeuble,
             'numero' => $request->numero,
              'etage' => $request->etage,
               'surface' => $request->surface,
                ];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}


//deleteAppatement

public function deleteAppatement(Request $request)
    {
        $id = $request->id;
        $appartement = Appartement::find($id);
            Appartement::destroy($id);
        
    }

}
