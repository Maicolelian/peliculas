<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PelisController extends Controller
{
    
    public function index()
    {
        $tmdb_id = 14694120;

        $data = Http::asJson()
        ->get(config('services.tmdb.endpoint').'movie/'.$tmdb_id. '?api_key='.config('services.tmdb.api'));

        return view('index', compact('data'));
    }
} 
