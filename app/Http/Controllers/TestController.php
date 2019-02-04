<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function testGet()
    {
        Log::info(Hash::make('123456'));
        return [
            'username' => 'krillin',
            'age'      => 22,
            'city'     => 'delhi'
        ];
    }

    public function testPost(Request $request)
    {
        Log::info($request->all());

        return $request->all();
    }
}
