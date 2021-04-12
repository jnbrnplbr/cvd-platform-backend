<?php

namespace App\Models;

use App\Http\Resources\DepartmentResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'description', 'slug', 'category_id'];


    public function list () {
        return DepartmentResource::collection(Department::all());
    }

    public function craft ($request) {
        return new DepartmentResource(
            Department::create([
                'name'          => $request->name,
                'description'   => $request->description,
                'slug'          => $request->slug,
                'category_id'   => Category::find($request->category)->id
            ]) 
        );
    }
 
}
