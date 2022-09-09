<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPracticeArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'practice_area_id'
    ];

}
