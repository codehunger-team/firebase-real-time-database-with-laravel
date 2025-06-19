<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FirebaseController extends Controller
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = rtrim(env('FIREBASE_DATABASE_URL'), '/') . '/';
    }

    public function store()
    {
        $response = Http::post($this->baseUrl . 'codehunger.json', [
            'subscriber' => 'John Doe',
            'email' => 'john@codheunger.in'
        ]);

        return response()->json([
            'firebase_response' => $response->json()
        ]);
    }
    
     public function fetch()
    {
        $response = Http::get($this->baseUrl . 'codehunger.json');

        return response()->json($response->json());
    }
  
}
