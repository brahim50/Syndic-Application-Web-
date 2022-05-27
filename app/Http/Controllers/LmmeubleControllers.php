<?php

namespace App\Http\Controllers;

use App\Models\Lmmeuble;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LmmeubleControllers extends Controller
{
    public function lmmeuble(){
        return view('lmmeuble');
    }
    public function lmmeubleEdit(){
        return view('lmmeubleEdit');
    }
    

    public function createmeuble(Request $request)
    {
        $file = $request->file('photo');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/images', $fileName);

        $empData = [
            'numero' => $request->numero,
             'nom' => $request->nom,
              'etage' => $request->etage,
               'addresse' => $request->addresse,
                'ville' => $request->ville,
                 'photo' => $fileName
                ];
		Lmmeuble::create($empData);
		return response()->json([
			'status' => 200,
		]);
        
    } 

    public function fetchAllLmmeuble(){
        $lmmeuble = Lmmeuble::all();
        $output = '';
        if($lmmeuble ->count() > 0){
            $output .= '<table id="zero_config" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Numero</th>
                    <th>Nom</th>
                    <th>Ville</th>
                    <th>Etage</th>
                    <th>Addresse</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';
            foreach ($lmmeuble as $meuble){
                $output .= '<tr>
                <td><img src="storage/images/' . $meuble->photo . '" width="50"></td>
                <td>' . $meuble->numero  . '</td>
                <td>' . $meuble->nom . '</td>
                <td>' . $meuble->ville . '</td>
                <td>' .$meuble->etage . '</td>
                <td>' .$meuble->addresse . '</td>
                <td>
                  <a href="#" id="' . $meuble->id . '" <button type="button" class="btn btn-outline-danger deleteIcon" style="position: relative;right:13px;"><i class="mdi mdi-delete"></i></button>

                  <a href="#" id="' . $meuble->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i>Edit</a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
			echo $output;

        } else {

            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }
    public function deleteLmmeuble(Request $request)
    {
        $id = $request->id;
        $lmmeuble = Lmmeuble::find($id);
        if(Storage::delete('public/images/'.$lmmeuble->photo)){
            Lmmeuble::destroy($id);
        }
    }
    public function edit(Request $request) {
		$id = $request->id;
		$emp = Lmmeuble::find($id);
		return response()->json($emp);
	}
    public function update(Request $request) {
		$fileName = '';
		$emp = Lmmeuble::find($request->id);
		if ($request->hasFile('photo')) {
			$file = $request->file('photo');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/images', $fileName);
			if ($emp->photo) {
				Storage::delete('public/images/' . $emp->photo);
			}
		} else {
			$fileName = $request->photo;
		}

		$empData = [
            'numero' => $request->numero,
            'nom' => $request->nom,
            'etage' => $request->etage,
            'addresse' => $request->addresse,
            'ville' => $request->ville,
            'photo' => $fileName
                ];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

}
