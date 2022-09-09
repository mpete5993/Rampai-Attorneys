<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use Toastr;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.galleries.index')->with([
            'categories' => Category::orderBy('created_at', 'desc')->latest()->get(),
            'albums' => Category::orderBy('created_at', 'desc')->latest()->get(),
            'galleries' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => ['required'],
            'image' => ['required'] 
        ]);

        $image = array();

        if ($files = $request->file('image')) {
            foreach ($files as $file ) {
                # code...
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path  = 'images/gallery/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);

                $image[] = $image_url;
            }
            Gallery::insert([
                'category_id' => $request->category_id,
                'image' => implode('|', $image)
            ]);
        }

        Toastr::success('images added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('admin.galleries.show')->with([
            'categories' => Category::all(),
            'album' => Gallery::find($id)
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
        $gallery = Gallery::find($id);

        $image = array();

        // if ($files = $request->file('image')) {
        //     foreach ($files as $file ) {
        //         # code...
        //         $image_name = md5(rand(1000, 10000));
        //         $ext = strtolower($file->getClientOriginalExtension());
        //         $image_full_name = $image_name.'.'.$ext;
        //         $upload_path  = 'images/gallery/';
        //         $image_url = $upload_path.$image_full_name;
        //         $file->move($upload_path, $image_full_name);

        //         $image[] = $image_url;
        //     }
        //     Gallery::insert([
        //         'category_id' => $gallery,
        //         'image' => implode('|', $image),
        //         'created_at' => now()
        //     ]);
        // }

        Toastr::success('images updated successfully');
        return back();
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
    }
}
