<?php

namespace App\Http\Controllers;

use App\Committee;
use App\EbookLibrary;
use App\Event;
use App\FAQ;
use App\MoneyTransaction;
use App\NoticeBoard;
use App\PhotoGallery;
use App\RamadanCalender;
use App\SalatTime;
use App\SlideShow;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MosqueHomeController extends Controller
{
    public function index(){
        $value1 = SlideShow::all();
        $value9 = Event::orderBy('created_at','desc')->take(10)->get(); //first 5 row will be taken from tabele as decending order
        $value10 = DB::table('imam_messages')->latest()->first();
        return view('mosquehome',compact('value1','value9','value10'));
    }
    public function eventDetail($id)
    {
        $item = Event::find($id);
        return view('mosquehome.guestcustomer.eventdetail',compact('item'));
    }
    public function mosquecommitte()
    {
        $item = Committee::all();
        return view('mosquehome.guestcustomer.committee',compact('item'));
    }
    public function noticeboard()
    {
        $item = NoticeBoard::all();
        return view('mosquehome.guestcustomer.noticeboard',compact('item'));
    }
    public function noticedetail($id)
    {
        $value = NoticeBoard::find($id);
        return view('mosquehome.guestcustomer.noticedetail',compact('value'));
    }
    public function moneytransaction()
    {
        $item = MoneyTransaction::orderBy('created_at','desc')->take(30)->get();;
        return view('mosquehome.guestcustomer.transaction',compact('item'));
    }
    public function photogallery()
    {
        $item = PhotoGallery::all();
        return view('mosquehome.guestcustomer.photogallery',compact('item'));
    }
    public function booklibrary()
    {
        $item = EbookLibrary::all();
        return view('mosquehome.guestcustomer.booklibrary',compact('item'));
    }
    public function videogallery()
    {
        $item = Video::all();
        return view('mosquehome.guestcustomer.videogallery',compact('item'));
    }
    public function ramadan()
    {
        $item = RamadanCalender::orderBy('created_at','desc')->take(1)->get();
        return view('mosquehome.guestcustomer.ramadan',compact('item'));

    }
    public function salat()
    {
        $item = SalatTime::orderBy('created_at','desc')->take(1)->get();
        return view('mosquehome.guestcustomer.salat',compact('item'));

    }
    public function faqform()
    {
        return view('mosquehome.guestcustomer.faq');

    }
    public function faq(Request $request)
    {
        $value = new FAQ();
        $value->email = $request->email;
        $value->phone = $request->phone;
        $value->problem = $request->problem;
        $value->save();
        return back()->with('success','You have successfully send message to Imam. Checkout to your mail for solution');
    }

}

