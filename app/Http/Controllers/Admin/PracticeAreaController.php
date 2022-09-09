<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PracticeArea;
use \Illuminate\Support\Str;
use Toastr;


class PracticeAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $practice_areas = PracticeArea::all();
        return view('admin.practice-areas.index', compact('practice_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.practice-areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'unique:practice_areas']
        ]);

        //practice area image upload
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('Images/posts', $image_new_name);

        $practice_area = PracticeArea::create([
            'name' => $request->name,
            'image' => 'Images/posts/'. $image_new_name,
            'description' => $request->description,
            'slug' => Str::slug($request->name)
        ]);
        Toastr::success('Item added successfully');
        return to_route('admin.practice-areas.index');
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
        return view('admin.practice-areas.edit')->with([
            'practice_area' => PracticeArea::find($id)
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
        //
        $practice_area = PracticeArea::find($id);

        if ($request->hasFile('image')) {
            # code...
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('Images/posts', $image_new_name);
            $practice_area->image = 'Images/posts/'.$image_new_name;
        }

        $practice_area->name = $request->name;
        $practice_area->slug = Str::slug($request->name);
        $practice_area->description = $request->description;

        $practice_area->save();

        Toastr::success('Item updated successfully');
        return to_route('admin.practice-areas.index');

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
        $practice_area = PracticeArea::find($id);
        $practice_area->delete();
        Toastr::success('Item deleted successfully');
        return to_route('admin.practice-areas.index');
    }
}
