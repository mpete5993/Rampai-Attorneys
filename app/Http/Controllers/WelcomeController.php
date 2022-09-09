<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeArea;
use App\Models\User;
use App\Models\Attorney;
use \Illuminate\Support\Str;
use App\Models\Testimonial;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('welcome')->with([
            'practice_areas' => PracticeArea::paginate(6),
            'attorneys' => Attorney::paginate(4),
            'users' => User::all(),
            'random_practice_area' => PracticeArea::inRandomOrder()->take(1)->get(),
            'testimonials' => Testimonial::orderBy('created_at', 'desc')->latest()->get()
        ]);
    }

    
}
