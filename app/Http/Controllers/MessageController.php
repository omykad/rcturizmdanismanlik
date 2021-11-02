<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ReceiveMessage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function message(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['string', 'max:50',  'required'],
            'email' => ['string', 'max:50' ,'required'],
            'subject' => ['string', 'max:100' ,'required'],
            'message' => ['string', 'max:300' ,'required'],
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $message = new Message;
        $message->name = request('name');
        $message->email = request('email');
        $message->subject = request('subject');
        $message->message = request('message');
        $message->save();

        $this->sendOrderConfirmationMail($message);
        return back();
    }

    public function sendOrderConfirmationMail($message){
        Mail::to('kadioglufomer@gmail.com')->send(new ReceiveMessage($message));
    }
}
