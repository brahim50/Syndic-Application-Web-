<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Revenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenuControllers extends Controller
{
    public function Revenu(){
        $datappa = DB::table('appartements')->get();
        $data = DB::table('lmmeubles')->get();
        //->with('data',$data);
        return view('revenu',[
            'data' => $data,
            'datappa' => $datappa,
            


        ]);
    }
    public function fetchAllrevenu(){
        $revenu = Revenu::all();
        $output = '';
        if($revenu ->count() > 0){
            $output .= '<table id="zero_config" class="table table-striped table-bordered">
            <thead>
            <tr>
                                        <th>Lmmeuble</th>
                                        <th>Appartement</th>
                                        <th>Somme</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
            </thead>
            <tbody>';
            foreach ($revenu as $reve){
                $output .= '<tr>
                <td>' . $reve->lmmeuble  . '</td>
                <td>' . $reve->appartement  . '</td>
                <td>' . $reve->somme . '</td>
                <td>' . $reve->date . '</td>
                <td>
                  <a href="#" id="' . $reve->id . '" <button type="button" class="btn btn-outline-danger deleteIcon" style="position: relative;left:40px;"><i class="mdi mdi-delete"></i></button>

                  <a href="#" id="' . $reve->id . '" <button type="button" class="btn btn-outline-warning editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal" style="position: relative;left:70px;"><i class="mdi mdi-pencil"></i></button>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
			echo $output;

        } else {

            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // createrevenu
    public function createrevenu(Request $request)
    {
       
        $empData = [
            'lmmeuble' => $request->lmmeuble, 
            'appartement' => $request->appartement, 
            'somme' => $request->somme, 
            'date' => $request->date,
        ];
        Revenu::create($empData);
        return response()->json([
			'status' => 200,
		]);
    }

    // editRevenu

    public function editRevenu(Request $request) {
		$id = $request->id;
		$reve = Revenu::find($id);
		return response()->json($reve);
	}

    // updaterevune

    public function updaterevune(Request $request) {
		$emp = Revenu::find($request->id);
		$empData = [
            'lmmeuble' => $request->lmmeuble,
             'appartement' => $request->appartement,
              'somme' => $request->somme,
               'date' => $request->date,
                ];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

    // deleterevenu
    public function deleterevenu(Request $request)
    {
        $id = $request->id;
        $appartement = Revenu::find($id);
            Revenu::destroy($id);
        
    }

}
