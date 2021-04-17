<?php

namespace App\Models;

use App\Http\Resources\AgencyResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'description','slug','policy','department_id'];
 
    // RELATIONSHIP WITH OTHER TABLE

    public function department () {
        return $this->belongsTo(Department::class);
    }

    public function report () {
        return $this->hasMany(Report::class);
    }

    // ACTIONS

    public function list () {
        return AgencyResource::collection(Agency::all());
    }

    public function craft ($request) {
        return new AgencyResource(Agency::create([
            'name'  => $request->name,
            'description'   => $request->description,
            'slug'          => $request->slug,
            'policy'        => $request->policy,
            'department_id' => $request->department
        ]));
    }
}
