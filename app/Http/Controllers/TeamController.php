<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attorney;
use App\Models\PracticeArea;

class TeamController extends Controller
{
    //
    public function index()
    {
        return view('attorneys')->with([
            'attorneys' => Attorney::paginate(8)
        ]);
    }

    public function attorneyShow($slug)
    {
        # code...
        $attorney = Attorney::where('slug', $slug)->firstOrFail();

        return view('attorney-detail')->with([
            'attorney' => $attorney,
            'practice_areas' => PracticeArea::all()
        ]);
        
    }
}
