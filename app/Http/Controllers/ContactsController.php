<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;
use App\Mail\ContactMessageCreated;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }
    public function store(ContactRequest $request)
    {

        $message=Message::create($request->only('name','email','message'));
    	$maillable=new ContactMessageCreated($message);
    	//Mail::to(config('laracarte.admin_support_email'))->send($maillable);
        Mail::to(config('laracarte.admin_support_email'))->queue($maillable);
        flashy('Nous vous répondrons dans de bref délai !');
    	return redirect()->route('root_path');
    }
}
