<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'jina_la_benki' => 'required|string',
        'jina_la_akaunti' => 'required|string',
        'akaunti_namba' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ]);
        } else {
            $bank = new Bank;
            $bank->jina_la_benki = $request->input('jina_la_benki');
            $bank->jina_la_akaunti = $request->input('jina_la_akaunti');
            $bank->akaunti_namba = $request->input('akaunti_namba');
            $bank->save();

            return response()->json([
                'status' => 200,
                'message' => 'Data received and saved successfully',
            ]);
        }
    }
}
