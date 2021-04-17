<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [ 'title','description','status','user_id','agency_id'];

    // RELATIONSHIP ON THE OTHER TABLE

    public function agency () {
        return $this->belongsTo(Agency::class);
    }
    
}
