<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index (Agency $agency) {
        return $agency->list();        
    }


    public function store(Request $request, Agency $agency) {
        return $agency->craft($request);
    }
    
}
