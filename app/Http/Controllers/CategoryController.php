<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (Category $category) {
        return $category->getAll();
    }


    public function store (CategoryRequest $request, Category $category) {
        return $category->craft($request);
    }


}
