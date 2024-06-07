<?php

namespace App\Http\Controllers;

use App\Models\Radionica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RadionicaController extends Controller
{
    //INDEX
    public function index() {
        $podaci = Radionica::get();
        return response()->json($podaci, 200);
    }

    //SHOW
    public function show($id){
        try
        {
            $podaci = Radionica::findOrFail($id);
            return response()->json($podaci);
        }
        catch (\Exception $e){
            return response()->json($e->getMessage());

        }

    }

    //STORE
    public function store(Request $request){

        try{
           $validator = Validator::make( $request->all(),[
                'OpisRadionice' => 'required|string',
                'IdKreatora' => 'required|exists:users,id',
                'NazivRadionice' => 'required|string',
                'DatumPocetka' => 'required|timestamp',
                'DatumZavrsetka' => 'required|timestamp',
                'PrijaveDo' => 'required|timestamp'
            ]);
            if($validator->fails()) {

                return response()->json($validator->errors(),422);
            }

            $podaci = Radionica::create([
                'NazivRadionice' => $request->NazivRadionice,
                'OpisRadionice' => $request->OpisRadionice,
                'VoditeljRadionice' => $request->VoditeljRadionice,
                'DatumPocetka' => $request->DatumPocetka,
                'DatumZavrsetka' => $request->DatumZavrsetka,
                'PrijaveDo' => $request->PrijaveDo,
                'IdKreatora' => $request->IdKreatora,
            ]);

            return response()->json($podaci->NazivRadionice, 201);
        }
        catch (\Exception $e){
            return response()->json($e->getMessage());

        }
    }

    //DESTROY
    public function destroy($id){
        try
        {
            $podaci = Radionica::findOrFail($id);
            $podaci->delete();
            return response()->json(204);
        }
        catch (\Exception $e){
            return response()->json($e->getMessage());

        }

    }

}
