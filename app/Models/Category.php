<?php

namespace App\Models;

use App\Http\Resources\CategoryResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   protected $fillable = [ 'title', 'description','slug'];


   // RELATIONSHIP TO OTHER TABLE
   public function department () {
      return $this->hasMany(Department::class);
   }


   // ACTIONS 
   public function getAll () {
      return CategoryResource::collection(Category::all());
   }

   public function craft ($request) {
      return new CategoryResource(Category::create([
         'title' => $request->name,
         'description' => $request->description,
         'slug' => $request->slug,
      ]));
   }
}
