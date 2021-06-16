<?php

namespace App\Http\Controllers;

use App\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = PhotoGallery::all();
        return view('admin.photogallery',compact('value'));

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
        $value = new PhotoGallery();
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $value->title = $request->title;
        if ($request->hasFile('file')){
            $photo = $request->file->getClientOriginalName();
            $request->file->storeAs('public/photogallery',$photo);
            $value->file = $photo;

            $value->save();
            return back()->with('success','You have successfully upload image.')
                ->with('image',$photo);
        }


//        return redirect('/admin/photo_gallery');

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $value = PhotoGallery::find($id);
        $value->delete();
        return back()->with('success','You have successfully delete photo');
    }
}
