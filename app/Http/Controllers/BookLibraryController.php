<?php

namespace App\Http\Controllers;

use App\EbookLibrary;
use Illuminate\Http\Request;

class BookLibraryController extends Controller
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
        $value = EbookLibrary::all();
        return view('admin.booklibrary',compact('value'));

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
        $value = new EbookLibrary();
        request()->validate([
            "file" => "required|mimes:pdf|max:100000",
        ]);
        $value->title = $request->title;
        if ($request->hasFile('file')){
            $file = $request->file->getClientOriginalName();
            $request->file->storeAs('public/booklibrary',$file);
            $value->file = $file;
            $value->save();
            return back()->with('success','You have successfully upload E-Book: Title is:'.$request->title)
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
        $value = EbookLibrary::find($id);
        $value->delete();
        return back()->with('success','You have successfully delete a book');

    }
}
