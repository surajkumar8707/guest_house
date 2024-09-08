<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $sliders = getAllSlider(1);
        // dd($sliders->toArray());
        return view('home', compact('sliders'));
    }
    public function aboutUs()
    {
        return view('about');
    }
    public function room()
    {
        return view('room');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function blog()
    {
        return view('blog');
    }

    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    public function termsCondition()
    {
        return view('terms_condition');
    }

    public function contactUs()
    {
        return view('contact');
    }

    public function saveContactUs(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // dd($validate);
        $contact = Contact::create($validate);
        // dd($contact);
        return redirect()->back()->with('success', "Thank you for contacting US");
    }
}
