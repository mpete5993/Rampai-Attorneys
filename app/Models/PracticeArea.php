<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug'
    ];

    public function attorneys () {
        return $this->belongsToMany('App\Models\Attorney');
    }


    public function  AttorneyPracticeAreas($attorney){
        return null !== $this->attorneys()->where('name', $attorney)->first();
    }
}
