<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Verify\Client;
use App\User;
use Illuminate\Support\Facades\Hash;

class NomineesController extends Controller
{
    public function nominees(){
        $data = User::where('is_nominee', 1)->get();
        return response()->json([
            'data' => $data,
        ]);
    }
}
