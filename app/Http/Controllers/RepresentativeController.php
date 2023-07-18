<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Representative;
use Illuminate\Support\Facades\Validator;

class RepresentativeController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'jina_la_kwanza_la_mwakilishi' => 'required|string',
        'jina_la_katikati_la_mwakilishi' => 'required|string',
        'jina_la_mwisho_la_mwakilishi' => 'required|string',
        'tarehe_ya_kuzaliwa' => 'required|date',
        'namba_ya_kitambulisho_cha_mzanzibari_cha_mwakilishi' => 'required|string',
        'uhusiano_na_mzee' => 'required|string',
        'namba_ya_simu_ya_mwakilishi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ]);
        } else {
            $representative = new Representative;
            $representative->jina_la_kwanza_la_mwakilishi = $request->input('jina_la_kwanza_la_mwakilishi');
            $representative->jina_la_katikati_la_mwakilishi = $request->input('jina_la_katikati_la_mwakilishi');
            $representative->jina_la_mwisho_la_mwakilishi = $request->input('jina_la_mwisho_la_mwakilishi');
            $representative->tarehe_ya_kuzaliwa = $request->input('tarehe_ya_kuzaliwa');
            $representative->namba_ya_kitambulisho_cha_mzanzibari_cha_mwakilishi = $request->input('namba_ya_kitambulisho_cha_mzanzibari_cha_mwakilishi');
            $representative->uhusiano_na_mzee = $request->input('uhusiano_na_mzee');
            $representative->namba_ya_simu_ya_mwakilishi = $request->input('namba_ya_simu_ya_mwakilishi');
            $representative->save();

            return response()->json([
                'status' => 200,
                'message' => 'Data received and saved successfully',
            ]);
        }
    }
}
