<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps', [

        ]);
    }
}
