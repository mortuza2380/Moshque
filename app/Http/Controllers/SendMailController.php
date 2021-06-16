<?php

namespace App\Http\Controllers;
use App\Mail\ContactForMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(request $request){
        $data = $request->all();
//        $data = array(
//            'email' => $request->email,
//            'msg' => $request->msg
//        );
//        dd($data);
        Mail::to($data['email'])->send(new ContactForMail($data));
//        redirect('/');
//        php artisan config:cache
        return back()->with('success','You have successfully sent mail to: '.$data['email']);
    }
}
