<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
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
        $value = Video::all();
        return view('admin.videogallery',compact('value'));

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
        $value = new Video();
        request()->validate([
            "file" => 'mimes:mp4,mov,ogg,qt,3gp,flv,mkv|max:200000',
        ]);
        $value->title = $request->title;
        if ($request->hasFile('file')){
            $file = $request->file->getClientOriginalName();
            $request->file->storeAs('public/videogallery',$file);
            $value->file = $file;
            $value->save();
            return back()->with('success','You have successfully upload Video: Title is:'.$request->title)
                ->with('image',$file);
        }
//        $value->save();
//        return redirect('/admin/book_library');
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
        $value = Video::find($id);
        $value->delete();
        return back()->with('success','You have successfully delete Video');
    }
}
