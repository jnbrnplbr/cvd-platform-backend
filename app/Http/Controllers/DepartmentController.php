<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    

    public function index (Department $department) {
        return $department->list();
    }

    public function store (Request $request, Department $department) {
        return $department->craft($request);
    }
}
