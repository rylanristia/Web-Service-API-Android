<?php

namespace App\Http\Controllers;

use App\Models\InputModel;
use Illuminate\Http\Request;

class InputuserController extends Controller
{
    public function index(Request $request)
    {

        InputModel::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'komentar' => $request['komentar'],
            'pertanyaan' => $request['pertanyaan']
        ]);


        return response()->json([
            'status' => 200
        ]);
    }
}