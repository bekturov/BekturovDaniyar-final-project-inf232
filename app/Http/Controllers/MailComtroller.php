<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;
use App\Mail\MailSender;
use Illuminate\Support\Facades\Mail;


class MailComtroller extends Controller
{
    //
    public function index() {
        return view('mails.mail_send');
    }
    public function send(Request $request) {
        $data = new \stdClass();
        $data->sender = $request->sender;
        $data->message = $request->message;
        Mail::to('bekturov.d767@gmail.com')->send(new MailSender($data));
        return back();
    }
    
}
