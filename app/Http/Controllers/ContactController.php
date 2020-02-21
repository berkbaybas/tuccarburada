<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
      Mail::to('berqsoft@berqsoft.com')->send(new ContactMail($request));

      return redirect()->back()->with('status', 'Mesajınız iletildi. En kısa sürede size ulaşacağız.');
      /*
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
          //  'phoneNumber' => 'required|regex:/(01)[0-9]{9}/',
          //  'email' => 'required|email',
          //  'message' => 'required'
        ]);


        Mail::send('emails-contact-message', array(
        'name' => $request->get('name'),
        'surname' => $request->get('surname'),
        'phoneNumber' => $request->get('phoneNumber'),
        'email' => $request->get('email'),
        'message' => $request->get('message')
        ),
        function($message) use($request)
        {
            $message->to('berk_baybas@hotmail.com', 'berqsoft')->subject('iletişim formu!');
        });


        return redirect()->back()->with('status', 'Mesajınız iletildi. En kısa sürede size ulaşacağız.');

        */
    }
}
