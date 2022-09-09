<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PracticeArea;

class ServicesController extends Controller
{
    public function index()
    {
        return view('practice-areas')->with([
            'practice_areas' => PracticeArea::paginate(9)
        ]);
    }


    public function services()
    {
        return view('services')->with([
            'services' => PracticeArea::all()
        ]);
    }
    
    public function practiceAreaShow($slug)
    {
        //
        $practice_area = PracticeArea::where('slug', $slug)->firstOrFail();

        return view('practice-area-detail')->with([
            'practice_area' => $practice_area,
            'practice_areas' => PracticeArea::inRandomOrder()->take(12)->get()
        ]);
    }
}
