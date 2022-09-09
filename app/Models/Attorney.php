<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'image',
        'slug',
        'image',
        'facebook',
        'details'
    ];

    public function practiceAreas () {
        return $this->belongsToMany('App\Models\PracticeArea');
    }

    public function  AttorneyPracticeAreas($practiceArea){
        return null !== $this->practiceAreas()->where('name', $practiceArea)->first();
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
