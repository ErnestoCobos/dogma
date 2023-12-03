<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DropboxController extends Controller
{
    public function webhook(Request $request)
    {
        Log::info($request->all());
    }
}
