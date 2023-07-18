<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pension;
use Illuminate\Support\Facades\Validator;

class PensionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tarehe_ya_kuzaliwa' => 'required|date',
            'hali_ya_ulemavu' => 'required|string',
            'jinsia' => 'required|string',
            'namba_ya_kitambulisho_cha_mzanzibari' => 'required|string',
            'mtaa' => 'required|string',
            'namba_ya_nyumba' => 'required|string',
            'shehia' => 'required|string',
            'wilaya' => 'required|string',
            'mkoa' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ]);
        } else {
            $pension = new Pension;
            $pension->tarehe_ya_kuzaliwa = $request->input('tarehe_ya_kuzaliwa');
            $pension->hali_ya_ulemavu = $request->input('hali_ya_ulemavu');
            $pension->jinsia = $request->input('jinsia');
            $pension->namba_ya_kitambulisho_cha_mzanzibari = $request->input('namba_ya_kitambulisho_cha_mzanzibari');
            $pension->mtaa = $request->input('mtaa');
            $pension->namba_ya_nyumba = $request->input('namba_ya_nyumba');
            $pension->shehia = $request->input('shehia');
            $pension->wilaya = $request->input('wilaya');
            $pension->mkoa = $request->input('mkoa');
            $pension->save();

            return response()->json([
                'status' => 200,
                'message' => 'Data received and saved successfully',
            ]);
        }
    }
}
