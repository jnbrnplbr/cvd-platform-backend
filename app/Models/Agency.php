<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    // RELATIONSHIP WITH OTHER TABLE

    public function department () {
        return $this->belongsTo(Department::class);
    }



    // ACTIONS

    public function list () {
        return Agency::all();
    }

    public function craft ($request) {
        return $request;
    }
}
