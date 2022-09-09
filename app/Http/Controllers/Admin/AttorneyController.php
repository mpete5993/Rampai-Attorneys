<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attorney;
use App\Models\PracticeArea;
use App\Models\User;
use \Illuminate\Support\Str;
use Toastr;

class AttorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.attorneys.index')->with('attorneys', Attorney::orderBy('id', 'asc')->latest()->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.attorneys.create')->with([
            'practice_areas'=> PracticeArea::all(),
            'users' => User::all(),
            'attorney' => Attorney::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //
        $validated = $request->validate([
            'user_id' => ['required', 'unique:attorneys'],
            'image' => 'required'
        ]);

        //Attorney image upload
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('images/team', $image_new_name);
        $slug = md5(rand(1000, 10000));

        $attorney = Attorney::create([
            'user_id' => $request->user_id,
            'slug' => Str::slug($slug),
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'linkedIn' => $request->linkedin,
            'twitter' => $request->twitter,
            'image' => 'images/team/'.$image_new_name,
            'details' => $request->details
        ]);
        $attorney->practiceAreas()->attach($request->practice_area);

        Toastr::success('Item added successfully');
        return to_route('admin.attorneys.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admin.attorneys.show')->with([
            'attorney' => Attorney::find($id),
            'practice_areas' => PracticeArea::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
        return view('admin.attorneys.edit')->with([
            'attorney' => Attorney::find($id),
            'practice_areas'=> PracticeArea::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attorney = Attorney::find($id);
        if ($request->hasFile('image')) {
            # code...
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('images/team', $image_new_name);

            $attorney->image = 'images/team/'.$image_new_name;
        }

        $attorney->facebook = $request->facebook;
        $attorney->linkedIn = $request->linkedin;
        $attorney->phone = $request->phone;
        $attorney->details = $request->details;

        $attorney->practiceAreas()->sync($request->practice_areas);
        $attorney->save();

        Toastr::success('Item updated successfully');
        return to_route('admin.attorneys.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Attorney::destroy($id);
        toastr()->success('Item deleted successfully');
        return  redirect()->route('admin.attorneys.index');
    }
}
