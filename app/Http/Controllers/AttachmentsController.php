<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachments;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AttachmentsController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cheti_cha_kuzaliwa' => 'required|file|mimes:pdf',
            'kitambulisho_cha_mzanzibari' => 'required|file|mimes:pdf',
            'picha_ya_pasipoti' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ]);
        }        

        $attachments = new Attachments;

        if ($request->hasFile('cheti_cha_kuzaliwa')) {
            $cheti_cha_kuzaliwa = $request->file('cheti_cha_kuzaliwa');
            $cheti_cha_kuzaliwaPath = $cheti_cha_kuzaliwa->store('attachments');
            $attachments->cheti_cha_kuzaliwa = $cheti_cha_kuzaliwaPath;
        }

        if ($request->hasFile('kitambulisho_cha_mzanzibari')) {
            $kitambulisho_cha_mzanzibari = $request->file('kitambulisho_cha_mzanzibari');
            $kitambulisho_cha_mzanzibariPath = $kitambulisho_cha_mzanzibari->store('attachments');
            $attachments->kitambulisho_cha_mzanzibari = $kitambulisho_cha_mzanzibariPath;
        }

        if ($request->hasFile('picha_ya_pasipoti')) {
            $picha_ya_pasipoti = $request->file('picha_ya_pasipoti');
            $picha_ya_pasipotiPath = $picha_ya_pasipoti->store('attachments');
            $attachments->picha_ya_pasipoti = $picha_ya_pasipotiPath;
        }

        $attachments->save();

        return response()->json([
            'status' => 200,
            'message' => 'Data received and saved successfully',
        ]);
    }
}
