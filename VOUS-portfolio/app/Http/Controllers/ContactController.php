<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'phone' => 'bail|required',
            'texte' => 'bail|required|max:2000'
        ]);

        Mail::to('administrateur@chezmoi.com')
            ->send(new Contact($request->except('_token')));

        return view('confirm');
    }
}
